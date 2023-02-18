<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Niveaux;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $niveaux = new Niveaux();
        $niveaux->setName('facile');
        $manager->persist($niveaux);
        $niveaux = new Niveaux();
        $niveaux->setName('difficile');
        $manager->persist($niveaux);
        $niveaux = new Niveaux();
        $niveaux->setName('faciles');
        $manager->persist($niveaux);
        $niveaux = new Niveaux();
        $niveaux->setName('difficiles');
        $manager->persist($niveaux);

        $categories = new Categories();
        $categories->setName("Poissons d'eau douce");
        $manager->persist($categories);
        $categories = new Categories();
        $categories->setName("Poissons d'eau de mer");
        $manager->persist($categories);
        $categories = new Categories();
        $categories->setName("Plantes");
        $manager->persist($categories);

        $manager->flush();

    }
}
