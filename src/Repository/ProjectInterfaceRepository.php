<?php

namespace App\Repository;

use App\Entity\ProjectInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectInterface[]    findAll()
 * @method ProjectInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectInterfaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectInterface::class);
    }

    // /**
    //  * @return ProjectInterface[] Returns an array of ProjectInterface objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProjectInterface
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
