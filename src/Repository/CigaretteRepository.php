<?php

namespace App\Repository;

use App\Entity\Cigarette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cigarette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cigarette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cigarette[]    findAll()
 * @method Cigarette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CigaretteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cigarette::class);
    }
    public function findBySearch(string $value)

    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery('
            SELECT c
            FROM App\Entity\Cigarette c
            WHERE c.marque LIKE :marque
            ')
        ->setParameter('marque', '%' . $value . '%');
        return $query->getResult();
    }
    // /**
    //  * @return Cigarette[] Returns an array of Cigarette objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cigarette
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
