<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Carbon\Carbon;

class EventRepository extends EntityRepository
{
    public function getPreviousEvents()
    {
        $now = Carbon::now();
        $qb = $this->createQueryBuilder('this');
        $qb
            ->andWhere('this.enddate < :now')
            ->setParameter('now', $now)
        ;
        $events = $qb->getQuery()->getResult();

        return $events;
    }

    public function getCurrentEvents()
    {
        $now = Carbon::now();
        $qb = $this->createQueryBuilder('this');
        $qb
            ->andWhere('this.startdate <= :now')
            ->andWhere('this.enddate > :now')
            ->setParameter('now', $now)
        ;
        $events = $qb->getQuery()->getResult();

        return $events;
    }

    public function getNextEvents()
    {
        $now = Carbon::now();
        $qb = $this->createQueryBuilder('this');
        $qb
            ->andWhere('this.startdate > :now')
            ->setParameter('now', $now)
        ;
        $events = $qb->getQuery()->getResult();

        return $events;
    }
}