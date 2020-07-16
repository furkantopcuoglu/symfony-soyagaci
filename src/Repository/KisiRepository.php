<?php

namespace App\Repository;

use App\Entity\Kisi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Kisi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kisi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kisi[]    findAll()
 * @method Kisi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KisiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kisi::class);
    }

    // /**
    //  * @return Kisi[] Returns an array of Kisi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kisi
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
