<?php

namespace App\Repository;

use App\Entity\Buy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Buy>
 *
 * @method Buy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Buy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Buy[]    findAll()
 * @method Buy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Buy::class);
    }

    public function save(Buy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Buy $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function countReceita()
    {
        $dbquery = $this->createQueryBuilder('b')
            ->where("b.status = 'approved'")
            ->select('SUM(b.total_payment)')
        ;
        return  $dbquery
            ->getQuery()
            ->getOneOrNullResult()[1];
    }

    public function findForReference(string $reference)
    {
        $dbquery = $this->createQueryBuilder('b')
            ->where("b.id_ml = :reference")
            ->andWhere("b.status = 'pending'")
            ->setParameter('reference',$reference)
        ;
        return  $dbquery
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findForReferenceMP(string $reference)
    {
        $dbquery = $this->createQueryBuilder('b')
            ->where("b.id_ml = :reference")
            ->setParameter('reference',$reference)
        ;
        return  $dbquery
            ->getQuery()
            ->getOneOrNullResult();
    }

//    /**
//     * @return Buy[] Returns an array of Buy objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Buy
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
