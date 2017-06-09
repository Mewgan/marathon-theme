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
            'alt' => 'Theme marathon thumbnail'
        ],
        [
            'title' => 'Logo theme marathon',
            'path' => '/src/Themes/Marathon/Resources/public/img/logo.png',
            'type' => 'image/png',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Logo marathon'
        ],
        [
            'title' => 'Theme marathon home page slide 1',
            'path' => '/src/Themes/Marathon/Resources/public/img/slide1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme marathon home page slide 1'
        ],
        [
            'title' => 'Theme marathon home page slide 2',
            'path' => '/src/Themes/Marathon/Resources/public/img/slide2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme marathon home page slide 2'
        ],
        [
            'title' => 'Theme marathon home page slide 3',
            'path' => '/src/Themes/Marathon/Resources/public/img/slide3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Theme marathon home page slide 3'
        ],
        [
            'title' => 'Book',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img1.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Book'
        ],
        [
            'title' => 'Runners',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img2.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Runners'
        ],
        [
            'title' => 'Field',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img3.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Field'
        ],
        [
            'title' => 'About',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img4.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'About'
        ],
        [
            'title' => 'Image 5',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img5.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Image 5'
        ],
        [
            'title' => 'Image 6',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img6.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Image 6'
        ],
        [
            'title' => 'Image 7',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img7.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Image 7'
        ],
        [
            'title' => 'Image 8',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img8.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Image 8'
        ],
        [
            'title' => 'Image 9',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img9.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Image 9'
        ],
        [
            'title' => 'Image 10',
            'path' => '/src/Themes/Marathon/Resources/public/img/page1_img10.jpg',
            'type' => 'image/jpg',
            'size' => 404299,
            'access_level' => 2,
            'alt' => 'Image 10'
        ]
    ];
    
    public function load(ObjectManager $manager)
    {
        $this->loadMedia($manager);
    }
}