<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Country;

class LoadCountries extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $countries = ['Philippines', 'US', 'China', 'Brazil'];

        foreach ($countries as $countryName) {
            $country = new Country();
            $country->setName($countryName);
            $manager->persist($country);
            $this->addReference($countryName, $country);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}