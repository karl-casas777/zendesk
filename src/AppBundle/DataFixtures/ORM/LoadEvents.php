<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Event;
use AppBundle\Entity\EventCountry;
use Carbon\Carbon;

class LoadEvents extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //US vs Philippines Basketball - yesterday
        $event = new Event();
        $event->setStartdate(Carbon::yesterday());
        $event->setEnddate(Carbon::yesterday()->addHours(4));
        $event->setGame($this->getReference('Basketball'));
        $manager->persist($event);

        $eventCountry = new EventCountry();
        $eventCountry->setEvent($event);
        $eventCountry->setCountry($this->getReference('US'));
        $eventCountry->setScore(110);
        $manager->persist($eventCountry);

        $eventCountry = new EventCountry();
        $eventCountry->setEvent($event);
        $eventCountry->setCountry($this->getReference('Philippines'));
        $eventCountry->setScore(90);
        $manager->persist($eventCountry);

        //US vs China Swimming - now
        $event = new Event();
        $event->setStartdate(Carbon::now());
        $event->setEnddate(Carbon::now()->addHours(2));
        $event->setGame($this->getReference('Swimming'));
        $manager->persist($event);

        $eventCountry = new EventCountry();
        $eventCountry->setEvent($event);
        $eventCountry->setCountry($this->getReference('US'));
        $eventCountry->setScore(10);
        $manager->persist($eventCountry);

        $eventCountry = new EventCountry();
        $eventCountry->setEvent($event);
        $eventCountry->setCountry($this->getReference('China'));
        $eventCountry->setScore(7);
        $manager->persist($eventCountry);

        //China vs Brazil Soccer - tomorrow
        $event = new Event();
        $event->setStartdate(Carbon::tomorrow());
        $event->setEnddate(Carbon::tomorrow()->addHours(3));
        $event->setGame($this->getReference('Soccer'));
        $manager->persist($event);

        $eventCountry = new EventCountry();
        $eventCountry->setEvent($event);
        $eventCountry->setCountry($this->getReference('China'));
        $manager->persist($eventCountry);

        $eventCountry = new EventCountry();
        $eventCountry->setEvent($event);
        $eventCountry->setCountry($this->getReference('Brazil'));
        $manager->persist($eventCountry);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}