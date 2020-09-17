<?php

namespace App\Repository;

use App\Entity\NewsletterSubscribe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;


/**
 * @method NewsletterSubscribe|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewsletterSubscribe|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewsletterSubscribe[]    findAll()
 * @method NewsletterSubscribe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewsletterSubscribeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewsletterSubscribe::class);
    }

    public function countAll()
    {
        return $this->createQueryBuilder('sub')
            ->select('COUNT(sub.id) AS nb_subs')
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByPage($page, $max_results = 20)
    {
        $qb = $this->createQueryBuilder('sub');

        // PAGINATOR
        $qb->setFirstResult(($page - 1) * $max_results)
            ->setMaxResults($max_results);

        $pag = new Paginator($qb);

        return $pag->getQuery()->getResult();
    }

    // /**
    //  * @return NewsletterSubscribe[] Returns an array of NewsletterSubscribe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NewsletterSubscribe
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
