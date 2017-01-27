<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 25.01.17
 * Time: 14:10
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPostData implements FixtureInterface
{


    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i<1000; $i++){
            $post = new Post();
            $post->setTitle($faker->sentence(3));
            $post->setLead($faker->text(200));
            $post->setContent($faker->text(200));
            $post->setCreatedAt($faker->dateTimeThisMonth);

            $manager->persist($post);
        }
        $manager->flush();
    }
}