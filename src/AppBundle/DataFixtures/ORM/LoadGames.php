<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Game;

class LoadGames extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $games = ['Basketball', 'Soccer', 'Swimming', 'Table Tennis'];

        foreach ($games as $gameName) {
            $game = new Game();
            $game->setName($gameName);
            $manager->persist($game);
            $this->addReference($gameName, $game);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}