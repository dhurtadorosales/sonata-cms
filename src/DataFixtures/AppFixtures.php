<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class AppFixtures
 *
 * @package App\DataFixtures
 */
class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user
            ->setEmail('dhurtadorosales@gmail.com')
            ->setPlainPassword('Dhurtado2019.')
            ->addRole('ROLE_SONATA_ADMIN')
            ->setEnabled(true);

        $manager->persist($user);
        $manager->flush();
    }
}
