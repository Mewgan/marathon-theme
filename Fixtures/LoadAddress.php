<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadAddress extends AbstractFixture
{

    use LoadFixture;

    protected $data = [
        'marathon-address' => [
            'alias' => 'Adresse de la société',
            'address' => '10 Rue Portefoin',
            'city' => 'Paris 3',
            'postal_code' => '75003',
            'country' => 'FRANCE',
            'account' => 'sumugan.sinnarasa@desico.fr'
        ],
        'luffy-marathon-address' => [
            'alias' => 'Adresse de la société',
            'address' => '12 Rue Ave Maria',
            'city' => 'Paris',
            'postal_code' => '75000',
            'country' => 'FRANCE',
            'account' => 'luffy@onepiece.com'
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->loadAddress($manager);
    }
}