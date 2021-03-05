<?php

namespace App\Repository;

use App\Entity\MmiWork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MmiWork|null find($id, $lockMode = null, $lockVersion = null)
 * @method MmiWork|null findOneBy(array $criteria, array $orderBy = null)
 * @method MmiWork[]    findAll()
 * @method MmiWork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MmiWorkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MmiWork::class);
    }

    // /**
    //  * @return MmiWork[] Returns an array of MmiWork objects
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
    public function findOneBySomeField($value): ?MmiWork
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
