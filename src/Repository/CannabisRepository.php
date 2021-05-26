<?php

namespace App\Repository;

use App\Entity\Cannabis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cannabis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cannabis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cannabis[]    findAll()
 * @method Cannabis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CannabisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cannabis::class);
    }
    public function findBySearch(string $value)

    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery('
            SELECT c
            FROM App\Entity\Cannabis c
            WHERE c.description LIKE :description
            ')
        ->setParameter('description', '%' . $value . '%');
        return $query->getResult();
    }
    // /**
    //  * @return Cannabis[] Returns an array of Cannabis objects
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
    public function findOneBySomeField($value): ?Cannabis
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
