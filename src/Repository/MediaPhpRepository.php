<?php

namespace App\Repository;

use App\Entity\MediaPhp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediaPhp|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaPhp|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaPhp[]    findAll()
 * @method MediaPhp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaPhpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaPhp::class);
    }

    // /**
    //  * @return MediaPhp[] Returns an array of MediaPhp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MediaPhp
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
