<?php
namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadSociety extends AbstractFixture
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Marathon Society',
            'email' => 'contact@marathon.com',
            'phone' => '0123456789',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Luffy Marathon Society',
            'email' => 'contact@luffy-marathon.com',
            'phone' => '0123456789',
            'account' => 'luffy@onepiece.com'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSociety($manager);
    }

}