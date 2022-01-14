<?php

namespace App\Repository;

use App\Entity\Src;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Src|null find($id, $lockMode = null, $lockVersion = null)
 * @method Src|null findOneBy(array $criteria, array $orderBy = null)
 * @method Src[]    findAll()
 * @method Src[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SrcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Src::class);
    }

    // /**
    //  * @return Src[] Returns an array of Src objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Src
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
