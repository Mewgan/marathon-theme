<?php

namespace Jet\Themes\Marathon\Fixtures;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadPost extends AbstractFixture implements DependentFixtureInterface
{

    use LoadPostFixture;

    protected $data = [
        /* Marathon website posts */
        'marathon-about-us' => [
            'title' => 'A propos de nous',
            'slug' => 'a-propos-de-nous',
            'short_description' => 'Un salon de coiffure chaleureux et convivial situé au cœur de Paris.',
            'content' => '<div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">Depuis 1986, notre salon prend soin de vous et de vos cheveux.</span>
                  <p>Notre expertise nous a permis de nous élever  parmi les 10 meilleurs salons de coiffure de la capitale. Parce que votre satisfaction est notre priorité, nous donnons le meilleur de nous-même pour vous apporter le  meilleur des services et des conseils.</p>  
                   <p>Notre équipe contient une grande diversité de professionnels : coiffeurs visagistes ou bien barbier sont à votre écoute pour réaliser tous vos souhaits et révéler votre personnalité. </p>
                  <p>Un salon de coiffure chaleureux et convivial situé au cœur de Paris.</p>
                  <p>Notre équipe est composée d\'expert, à votre écoute, pour réaliser tous vos souhaits.</p>
                </div>',
            'thumbnail' => '/src/Themes/Marathon/Resources/public/img/page1_img4.jpg',
            'categories' => [],
            'website' => 'marathon-society'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPost($manager);
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
            'Jet\Themes\Marathon\Fixtures\LoadWebsite',
            'Jet\Themes\Marathon\Fixtures\LoadMedia',
        ];
    }
}