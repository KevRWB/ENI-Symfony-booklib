<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $book1 = new Book();
        $book1->setTitle('Asterix Mission Cleopatre');
        $book1->setImage('aec.jpg');

        $book2 = new Book();
        $book2->setTitle('Harry Potter à l\'école des sorciers');
        $book2->setImage('hpalds.jpg');

        $book3 = new Book();
        $book3->setTitle('Harry Potter et la coupe de feu');
        $book3->setImage('hpelcdf.jpg');

        $book4 = new Book();
        $book4->setTitle('Le tour du monde en 80 jours');
        $book4->setImage('ltdmeqj.jpg');

        $book5 = new Book();
        $book5->setTitle('Madame Bovary');
        $book5->setImage('mb.jpg');

        $book6 = new Book();
        $book6->setTitle('Vingt Mille Lieux sous les mers');
        $book6->setImage('vmlslm.jpg');

        $manager->flush($book1);
        $manager->flush($book2);
        $manager->flush($book3);
        $manager->flush($book4);
        $manager->flush($book5);
        $manager->flush($book6);
    }
}
