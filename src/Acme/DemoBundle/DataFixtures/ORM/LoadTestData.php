<?php

namespace Acme\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\DemoBundle\Entity\Test;

class LoadTestData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for($i = 0 ; $i < 100 ; $i++){
            $test = new Test();
            $test->setName($this->generateRandomString(rand(5, 30)));
            $test->setPoints(rand(5, 30));
            $test->setCreated(new \DateTime());
    
            $manager->persist($test);
            $manager->flush();
        }
        
    }
    
    private function generateRandomString($length = 10) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}