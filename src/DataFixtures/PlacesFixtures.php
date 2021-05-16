<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Place;

class PlacesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++)
        {
            $place = new Place();
            $place->setNom("Tour Effeil")
            ->setAddress("Tour Eiffel 75007 Paris")
            ->setCoordinate("{lat:48.867086,long:2.277141}");

            $manager->persist($place);
        }

        $manager->flush();
    }
}
