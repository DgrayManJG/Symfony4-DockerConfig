<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $productsName = array('Console', 'PC', 'Switch');

        // create 20 products! Bam!
        for ($i = 0; $i < sizeof($productsName); $i++) {
            $product = new Product();
            $product->setName('product '.$productsName[$i]);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
