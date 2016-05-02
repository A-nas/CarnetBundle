<?php

// src/AppBundle/DataFixtures/ORM/LoadContacteData.php

namespace P\CarnetBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use P\CarnetBundle\Entity\Contacte;

class LoadContacteData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	// regarder la classe BaseUser de FOSUserBundle
    	$contacte1 = new Contacte();
        $contacte1->setUsername('A-nas');
        $contacte1->setEmail('anass.laghouaouta@hotmail.com');
        $contacte1->setPlainPassword('passwd');
        $contacte1->setNom('Laghouaouta');
        $contacte1->setPrenom('Anas');

    	$contacte2 = new Contacte();
    	$contacte2->setUsername('Ha-mza');
        $contacte2->setEmail('Hamza.Salhi@hotmail.com');
        $contacte2->setPlainPassword('passwd');
        $contacte2->setNom('Salhi');
        $contacte2->setPrenom('Hamza');

        $contacte3 = new Contacte();
    	$contacte3->setUsername('Pi-erre');
        $contacte3->setEmail('Pierre.siri@hotmail.com');
        $contacte3->setPlainPassword('passwd');
        $contacte3->setNom('Siri');
        $contacte3->setPrenom('Pierre');

        $contacte4 = new Contacte();
    	$contacte4->setUsername('Za-karia');
        $contacte4->setEmail('Zakaria.laghouaouta@hotmail.com');
        $contacte4->setPlainPassword('passwd');
        $contacte4->setNom('Laghouaouta');
        $contacte4->setPrenom('Zakaria');

        $contacte5 = new Contacte();
    	$contacte5->setUsername('Gh-ilzane');
        $contacte5->setEmail('Ghizlane.Laghouaouta@hotmail.com');
        $contacte5->setPlainPassword('passwd');
        $contacte5->setNom('Laghouaouta');
        $contacte5->setPrenom('Ghizlane');

        $contacte1->addContacte($contacte2);
    	$contacte1->addContacte($contacte3);
    	$contacte1->addContacte($contacte4);
    	$contacte1->addContacte($contacte5);


        $manager->persist($contacte1);
        $manager->persist($contacte2);
        $manager->persist($contacte3);
        $manager->persist($contacte4);
        $manager->persist($contacte5);

        $manager->flush();
    }
}