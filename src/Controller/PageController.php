<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use App\Entity\Page;
use App\Entity\User;
use Twig\Environment;
use App\Entity\Comment;
use App\Entity\Cannabis;
use App\Entity\Cigarette;
use App\Entity\Substance;
use App\Entity\Medicament;
use App\Form\CommentFormType;
use App\Form\CannabisFormType;
use App\Form\CigaretteFormType;
use App\Form\SubstanceFormType;
use App\Form\MedicamentFormType;
use App\Repository\PageRepository;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormView;
use App\Repository\MedicamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class PageController extends AbstractController
{
    /**
     * @Route("/"), name="homepage"
     */
    public function index(PageRepository $pageRepository): Response
    {
        return $this->RedirectToRoute('app_page_show', ['slug' => 'home']);
    }


    /**
     * @Route("page/{slug}"), name="page_show"
     */
    public function show(Environment $twig, EntityManagerInterface $em, Request $request, string $slug, Page $page, UserRepository $userRepository, MedicamentRepository $medicamentRepository): Response
    {
        $user = $this->getUser();
        if (!$user && $slug !== "home") {
            return $this->RedirectToRoute('app_login');
        } elseif (!$user && $slug === 'home') {
            return new Response($twig->render('page/home.html.twig', [

                'page' => $page,

            ]));
        } else {
            $userId = $user->getId();
            $isVerified = $user->getIsVerified();
            if ($isVerified === false) {

                return $this->RedirectToRoute('app_login');
            }
        }
        switch ($slug) {

            case 'temoignages':
                $comment = new Comment();
                $form = $this->createForm(CommentFormType::class, $comment);
                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $comment->setUser($user);
                    $comment = $form->getData();
                    $datetime  = date_timezone_set(new DateTime('now'), new DateTimeZone('Europe/Paris'));
                    $comment->setCreatedAt($datetime);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($comment);
                    $comments = $this->getDoctrine()->getRepository(Comment::class)->findAll();
                    $entityManager->flush();
                    return new Response($twig->render('page/temoignages.html.twig', [
                        'page' => $page,
                        'comments' => $comments,
                        'substances' => $user->getSubstances(),
                        'comment' => $comment,
                        'user' => $user,
                    ]));
                } else {
                    $comment = new Comment();
                    $form = $this->createForm(CommentFormType::class, $comment);
                    $form = $form->createView();
                    $comments = $this->getDoctrine()->getRepository(Comment::class)->findAll();
                    return new Response($twig->render('page/temoignages.html.twig', [
                        'page' => $page,
                        'comments' => $comments,
                        'slug' => $slug,
                        'substances' => $user->getSubstances(),
                        'commentForm' => $form,
                        'user' => $user,
                    ]));
                }
            case 'stats':
                $substances = $user->getSubstances();

                $data = [['Substance', 'Quantité']];
                foreach ($substances as $substance) {
                    /**
                     * Référentiel du calcul statistique
                     * 1 unité = 1 gramme = 10 cl
                     * 1 comprimé = 10 mg = 0.01g = 0.01 unité 
                     * 1 litre de café = 1000 ml = 10 unité
                     * 1 paquet de cigarettes = 20 cigarettes = 15 grammes  = 15 unités
                     * 1 unité nocive = 1 unité * 1000
                     * A VOIR AVEC L'ADDICTOLOGUE
                     */
                    if (preg_match("/^\+?(0*[1-9]\d*(?:[\., ]\d+)*) *(?:\p{Sc}|°[FC])?$/m", $substance->getName(), $match) && stristr($substance->getName(), "mg")) {
                        $match = (float)$match;
                        $substance->setQuantity($match * 100);
                    }
                    if (preg_match("/^\+?(0*[1-9]\d*(?:[\., ]\d+)*) *(?:\p{Sc}|°[FC])?$/m", $substance->getName(), $match) && stristr($substance->getName(), "ml")) {
                        $match = (float)$match;
                        $substance->setQuantity($match * 100);
                    }
                    if (stristr($substance->getName(), 'paquet')) {
                        $substance->setQuantity($substance->getQuantity() * 20);
                    }

                    if ($substance->getQuantityType() === 'millilitres') {
                        $substance->setQuantity($substance->getQuantity() / 1000);
                    }
                    if ($substance->getQuantityType() === 'milligrammes') {
                        $substance->setQuantity($substance->getQuantity() / 1000);
                    }
                    if ($substance->getNocivity() === true) {
                        $substance->getQuantity() * 1000;
                    }
                    $data[] = array(
                        $substance->getName(), $substance->getQuantity()
                    );
                }
                $pieChart = new PieChart();
                $pieChart->getData()->setArrayToDataTable(
                    $data
                );

                $pieChart->getOptions()->setTitle('Votre consommation de substances');
                $pieChart->getOptions()->setHeight(400);
                $pieChart->getOptions()->setWidth(350);
                $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
                $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
                $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
                $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
                $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

                return $this->render('page/stats.html.twig', array(
                    'piechart' => $pieChart,
                    'page' => $page,
                    'user' => $user
                ));

                break;
            case 'money':
                $substances = $user->getSubstances();
                return new Response($twig->render('page/money.html.twig', [
                    'page' => $page,
                    'substances' => $substances,
                    'user' => $user,
                ]));
            case 'autre-substance':
                $substance = new Substance();
                $form = $this->createForm(SubstanceFormType::class, $substance);
                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $substance = $form->getData();
                    $datetime  = date_timezone_set(new DateTime('now'), new DateTimeZone('Europe/Paris'));
                    $substance->setCreatedAt($datetime);
                    $user->addSubstance($substance);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    $substance->addUser($user);
                    $substance->setNocivity(false);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($substance);
                    $entityManager->flush();
                    return new Response($twig->render('page/autre-substance.html.twig', [
                        'page' => $page,
                        'substanceForm' => $form->createView(),
                        'substances' => $user->getSubstances(),
                        'substance' => $substance,
                        'user' => $user,
                    ]));
                } else {
                    $substance = new Substance();
                    $form = $this->createForm(SubstanceFormType::class, $substance);
                    $form = $form->createView();
                    return new Response($twig->render('page/autre-substance.html.twig', [
                        'page' => $page,
                        'slug' => $slug,
                        'substances' => $user->getSubstances(),
                        'substanceForm' => $form,
                        'user' => $user,
                    ]));
                }
            case 'nocivite-substance':
                $id = $_GET['id'];
                $substance = $this->getDoctrine()->getRepository(Substance::class)->find($id);
                $substance->setNocivity(true);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($substance);
                $entityManager->flush();
                return new Response($twig->render('page/nocivite.html.twig', [
                    'page' => $page,
                    'substances' => $user->getSubstances(),
                    'user' => $user,
                    'substance' => $substance,
                ]));

            case 'tips':
                $substances = $user->getSubstances();
                return new Response($twig->render('page/tips.html.twig', [
                    'page' => $page,
                    'substances' => $substances,
                    'user' => $user,
                ]));
            case 'home':
                if (isset($anonymous) && $anonymous === true) {
                    return new Response($twig->render('page/home.html.twig', [

                        'page' => $page,

                    ]));
                } else {
                    $substances = $user->getSubstances();
                    return new Response($twig->render('page/home.html.twig', [
                        'substances' => $substances,
                        'page' => $page,
                        'user' => $user

                    ]));
                }

            case 'search':
                return new Response($twig->render('page/search.html.twig', [
                    'page' => $page,
                    'user' => $user,
                ]));
            case 'login':
                return  $this->RedirectToRoute('app_login');
            case 'disconnect':
                return  $this->RedirectToRoute('app_logout');
            case 'infos':
                $substances = $user->getSubstances();
                return new Response($twig->render('page/infos.html.twig', [
                    'page' => $page,
                    'substances' => $substances,
                    'user' => $user,
                ]));
            case 'videos':
                $substances = $user->getSubstances();
                return new Response($twig->render('page/videos.html.twig', [
                    'page' => $page,
                    'substances' => $substances,
                    'user' => $user,
                ]));
            case 'goals':
                $substances = $user->getSubstances();
                return new Response($twig->render('page/goals.html.twig', [
                    'page' => $page,
                    'substances' => $substances,
                    'user' => $user,
                ]));
            case 'historic':
                $substances = $user->getSubstances();
                return new Response($twig->render('page/historic.html.twig', [
                    'page' => $page,
                    'substances' => $substances,
                    'user' => $userRepository->find($userId),
                ]));
            case 'calcul':
                $substances = $user->getSubstances();
                $conso = $_POST['number'];
                $type = $_POST['type'];
                return new Response($twig->render('page/money.html.twig', [
                    'page' => $page,
                    'type' => $type,
                    'conso' => $conso,
                    'substances' => $substances,
                    'user' => $userRepository->find($userId),
                ]));
            case 'add-substance':
                $id = $_GET['id'];
                if (empty($id)) {
                    return new Response($twig->render('page/index.html.twig', [
                        'page' => $page,
                        'substances' => $user->getSubstances(),
                        'user' => $userRepository->find($userId),
                    ]));
                }
                $substance = $this->getDoctrine()->getRepository(Substance::class)->find($id);
                $substance->setQuantity($substance->getQuantity() + 1);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($substance);
                $entityManager->flush();
                return new Response($twig->render('page/add-substance.html.twig', [
                    'page' => $page,
                    'substance' => $substance,
                    'substances' => $user->getSubstances(),
                    'user' => $userRepository->find($userId),
                ]));
            case 'less-substance':
                $id = $_GET['id'];
                if (empty($id)) {
                    return new Response($twig->render('page/index.html.twig', [
                        'page' => $page,
                        'substances' => $user->getSubstances(),
                        'user' => $userRepository->find($userId),
                    ]));
                }
                $substance = $this->getDoctrine()->getRepository(Substance::class)->find($id);
                $substance->setQuantity($substance->getQuantity() - 1);
                if ($substance->getQuantity() == '0') {
                    $user->removeSubstance($substance);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($substance);
                $entityManager->flush();
                return new Response($twig->render('page/less-substance.html.twig', [
                    'page' => $page,
                    'substances' =>  $user->getSubstances(),
                    'substance' => $substance,
                    'user' => $userRepository->find($userId),
                ]));
            case 'delete-substance':
                $id = $_GET['id'];
                if (empty($id)) {
                    return new Response($twig->render('page/index.html.twig', [
                        'page' => $page,
                        'substances' => $user->getSubstances(),
                        'user' => $userRepository->find($userId),
                    ]));
                }
                $substance = $this->getDoctrine()->getRepository(Substance::class)->find($id);
                $user->removeSubstance($substance);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($substance);
                $entityManager->flush();
                return new Response($twig->render('page/delete-substance.html.twig', [
                    'page' => $page,
                    'substance' => $substance,
                    'substances' => $user->getSubstances(),
                    'user' => $userRepository->find($userId),
                ]));
            case 'tabac':
                $cigarette = new Cigarette();
                $form = $this->createForm(CigaretteFormType::class, $cigarette);
                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $req =   $form->get('marque')->getData();
                    $value = $this->getDoctrine()->getRepository(Cigarette::class)->findBySearch($req);
                    $form = $form->createView();
                    return new Response($twig->render('page/cigarette.html.twig', [
                        'page' => $page,
                        'value' => $value,

                        'substances' => $user->getSubstances(),
                        'cigaretteForm' => $form,
                        'user' => $userRepository->find($userId),
                    ]));
                } else {
                    $cigarette = new Cigarette();
                    $form = $this->createForm(CigaretteFormType::class, $cigarette);
                    $form = $form->createView();
                    return new Response($twig->render('page/cigarette.html.twig', [
                        'page' => $page,
                        'slug' => $slug,
                        'substances' => $user->getSubstances(),
                        'cigaretteForm' => $form,
                        'user' => $userRepository->find($userId),
                    ]));
                }
            case 'substances':
                $medicament = new Medicament();
                $substances = $user->getSubstances();
                $form = $this->createForm(MedicamentFormType::class, $medicament);
                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $req =   $form->get('medicament')->getData();
                    $value = $this->getDoctrine()->getRepository(Medicament::class)->findBySearch($req);
                    $form = $form->createView();
                    return new Response($twig->render('page/show.html.twig', [
                        'page' => $page,
                        'substances' => $substances,
                        'value' => $value,
                        'medicamentForm' => $form,
                        'user' => $user,
                    ]));
                } else {
                    $medicament = new Medicament();
                    $substances = $user->getSubstances();
                    $form = $this->createForm(MedicamentFormType::class, $medicament);
                    $form = $form->createView();
                    return new Response($twig->render('page/show.html.twig', [
                        'page' => $page,
                        'substances' => $substances,
                        'slug' => $slug,
                        'medicamentForm' => $form,
                        'user' => $userRepository->find($userId),
                    ]));
                }

            case 'cannabis':
                $cannabis = new Cannabis();
                $form = $this->createForm(CannabisFormType::class, $cannabis);
                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $req =   $form->get('description')->getData();
                    $value = $this->getDoctrine()->getRepository(Cannabis::class)->findBySearch($req);
                    $form = $form->createView();
                    return new Response($twig->render('page/cannabis.html.twig', [
                        'page' => $page,
                        'value' => $value,
                        'substances' => $user->getSubstances(),
                        'cannabisForm' => $form,
                        'user' => $userRepository->find($userId),
                    ]));
                } else {
                    $cannabis = new Cannabis();
                    $form = $this->createForm(CannabisFormType::class, $cannabis);
                    $form = $form->createView();
                    return new Response($twig->render('page/cannabis.html.twig', [
                        'page' => $page,
                        'slug' => $slug,
                        'substances' => $user->getSubstances(),
                        'cannabisForm' => $form,
                        'user' => $userRepository->find($userId),
                    ]));
                }
            case 'register-cigarette':
                $cigarette = new Cigarette();
                $form = $this->createForm(CigaretteFormType::class, $cigarette);
                $form->handleRequest($request);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['type'] === 'cigarette') {
                    // The request is using the POST method
                    $user = $userRepository->find($userId);
                    $substance = new Substance();
                    $req = $_POST['marque'];
                    $substance->setName($req);
                    $substance->setPrice($_POST['price']);
                    $substance->setQuantity(1);
                    $substance->setNocivity(false);
                    $substance->setType('cigarette');
                    $datetime  = date_timezone_set(new DateTime('now'), new DateTimeZone('Europe/Paris'));
                    $substance->setCreatedAt($datetime);
                    $user->addSubstance($substance);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    $substance->addUser($user);
                    $substance->setQuantityType('paquet de cigarettes');
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($substance);
                    $entityManager->flush();
                    return new Response($twig->render('page/cigarette.html.twig', [
                        'page' => $page,
                        'user' => $user,
                        'cigaretteForm' => $form->createView(),
                        'val' => $req,
                        'substances' => $user->getSubstances(),
                        'user' => $userRepository->find($userId),
                    ]));
                }

            case 'register-substance':
                $medicament = new Medicament();
                $form = $this->createForm(MedicamentFormType::class, $medicament);
                $form->handleRequest($request);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['type'] === 'medicament') {
                    // The request is using the POST method
                    $user = $userRepository->find($userId);
                    $substance = new Substance();
                    $req = $_POST['medicament'];
                    $substance->setName($req);
                    $substance->setPrice($_POST['price']);
                    $substance->setNocivity(false);
                    $substance->setQuantity(1);
                    $substance->setType('medicament');
                    $datetime  = date_timezone_set(new DateTime('now'), new DateTimeZone('Europe/Paris'));
                    $substance->setCreatedAt($datetime);
                    $user->addSubstance($substance);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    $substance->addUser($user);
                    $substance->setQuantityType('comprimé(s)');
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($substance);
                    $entityManager->flush();
                    $substances = $user->getSubstances();
                    return new Response($twig->render('page/show.html.twig', [
                        'page' => $page,
                        'user' => $user,
                        'substances' => $substances,
                        'medicamentForm' => $form->createView(),
                        'val' => $req,
                        'user' => $userRepository->find($userId),
                    ]));
                }
            case 'register-cannabis':
                $cannabis = new Cannabis();
                $form = $this->createForm(CannabisFormType::class, $cannabis);
                $form->handleRequest($request);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['type'] === 'cannabis') {
                    // The request is using the POST method
                    $user = $userRepository->find($userId);
                    $substance = new Substance();
                    $req = $_POST['variete'];
                    $substance->setName($req);
                    $substance->setPrice($_POST['price']);
                    $substance->setQuantity(1);
                    $substance->setNocivity(false);
                    $datetime  = date_timezone_set(new DateTime('now'), new DateTimeZone('Europe/Paris'));
                    $substance->setCreatedAt($datetime);
                    $substance->setType('cannabis');
                    $user->addSubstance($substance);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    $substance->addUser($user);
                    $substance->setQuantityType('gramme(s)');
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($substance);
                    $entityManager->flush();
                    return new Response($twig->render('page/cannabis.html.twig', [
                        'page' => $page,
                        'cannabisForm' => $form->createView(),
                        'user' => $user,
                        'substances' => $user->getSubstances(),
                        'val' => $req,
                        'user' => $userRepository->find($userId),
                    ]));
                }
            case 'register':
                return new Response($twig->render('page/register.html.twig', [
                    'page' => $page,
                    'user' => $user
                ]));
            case 'services':
                return new Response($twig->render('page/services.html.twig', [
                    'page' => $page,
                    'user' => $user
                ]));
        }

        return new Response($twig->render('page/index.html.twig', [
            'pages' => $this->getDoctrine()->getRepository(Page::class)->findAll(),
            'user' => $user,
        ]));
    }
}
