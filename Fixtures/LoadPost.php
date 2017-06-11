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
            'short_description' => 'Ecommodo re luctus libero. Praesent faucibusertulomi malesuada cibuste. Donec laoreet metus id laoreetert malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => '<p>Ecommodo re luctus libero. Praesent faucibusertulomi malesuada cibuste. Donec laoreet metus id laoreetert malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed ertoli molo Curabitur vel lorem sit amet nulla ullamcorper</p>',
            'thumbnail' => '/src/Themes/Marathon/Resources/public/img/page1_img4.jpg',
            'categories' => [],
            'website' => 'marathon-society'
        ],
        'marathon-actu-1' => [
            'title' => 'Magna non nunc tristique rhoncuseri',
            'slug' => 'magna-non-nunc-tristique-rhoncuseri',
            'short_description' => 'Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.',
            'content' => '<p>Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.</p>',
            'thumbnail' => '/src/Themes/Marathon/Resources/public/img/page1_img5.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'marathon-society'
        ],
        'marathon-actu-2' => [
            'title' => 'Tagna non nunc tristique rhoncuseri',
            'slug' => 'tagna-non-nunc-tristique-rhoncuseri',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<p>Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.</p>',
            'thumbnail' => '/src/Themes/Marathon/Resources/public/img/page1_img6.jpg',
            'categories' => [
                'actualite'
            ],
            'website' => 'marathon-society'
        ],
        'marathon-race-1' => [
            'title' => 'Course 1',
            'slug' => 'course-1',
            'short_description' => 'Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.',
            'content' => '<p>Aliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibuste.</p>',
            'thumbnail' => '/src/Themes/Marathon/Resources/public/img/page1_img7.jpg',
            'categories' => [
                'marathon-course'
            ],
            'website' => 'marathon-society'
        ],
        'marathon-race-2' => [
            'title' => 'Course 2',
            'slug' => 'course-2',
            'short_description' => 'Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.',
            'content' => '<p>Boliquam nibh ante, egestas id dictum a, commodo re luctus liberaesenucibus malesuada cibustew.</p>',
            'thumbnail' => '/src/Themes/Marathon/Resources/public/img/page1_img8.jpg',
            'categories' => [
                'marathon-course'
            ],
            'website' => 'marathon-society'
        ]
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
            'Jet\Themes\Marathon\Fixtures\LoadPostCategory',
        ];
    }
}