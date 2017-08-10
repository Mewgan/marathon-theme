<?php
namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadSociety extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;

    protected $data = [
        [
            'name' => 'Marathon Society',
            'email' => 'contact@marathon.com',
            'phone' => '0123456789',
            'address' => 'marathon-address',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        [
            'name' => 'Luffy Marathon Society',
            'email' => 'contact@luffy-marathon.com',
            'phone' => '0123456789',
            'address' => 'luffy-marathon-address',
            'account' => 'luffy@onepiece.com'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSociety($manager);
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return [
            'Jet\Themes\Marathon\Fixtures\LoadAddress'
        ];
    }

}