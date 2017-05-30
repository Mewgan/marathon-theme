<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadMedia extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        [
            'title' => 'Theme marathon thumbnail',
            'path' => '/public/media/default/thumbnail/theme-marathon-thumbnail.png',
            'type' => 'image/png',
            'size' => 137577,
            'access_level' => 2,
            'scope' => 'global',
            'alt' => 'Theme marathon thumbnail'
        ],
        [
            'title' => 'Logo theme marathon',
            'path' => '/src/Themes/Marathon/Resources/public/img/logo.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'global',
            'alt' => 'Logo marathon'
        ],
        [
            'title' => 'Theme marathon home page slide 1',
            'path' => '/src/Themes/Marathon/Resources/public/img/slide1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'global',
            'alt' => 'Theme marathon home page slide 1'
        ],
        [
            'title' => 'Theme marathon home page slide 2',
            'path' => '/src/Themes/Marathon/Resources/public/img/slide2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'specified',
            'alt' => 'Theme marathon home page slide 2'
        ],
        [
            'title' => 'Theme marathon home page slide 3',
            'path' => '/src/Themes/Marathon/Resources/public/img/slide3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'specified',
            'alt' => 'Theme marathon home page slide 3'
        ],
        [
            'title' => 'Book',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'specified',
            'alt' => 'Book'
        ],
        [
            'title' => 'Runners',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'specified',
            'alt' => 'Runners'
        ],
        [
            'title' => 'Field',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'specified',
            'alt' => 'Field'
        ],
        [
            'title' => 'About',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'scope' => 'specified',
            'alt' => 'About'
        ]
    ];
    
    public function load(ObjectManager $manager)
    {
        $this->loadMedia($manager);
    }
}