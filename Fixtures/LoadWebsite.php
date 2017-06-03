<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadWebsite extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Marathon Website' => [
            'society' => 'Marathon Society',
            'domain' => 'marathon-society',
            'theme' =>  'Marathon',
            'layout' => 'marathon_layout',
            'render_system' => 'php',
            'expiration_date' => '2017-12-20 10:00:00',
            'modules' => [
                'navigation',
                'post'
            ],
            'templates' => [
                'marathon_layout',
                'marathon_home_page_layout',
                'marathon_home_list_news_partial',
                'marathon_gallery_layout',
                'marathon_contact_layout',
                'marathon_page_layout',
                'marathon_post_list_partial',
                'marathon_single_post_partial',
            ],
            'medias' => [
                '/public/media/default/thumbnail/theme-marathon-thumbnail.png',
                '/src/Themes/Marathon/Resources/public/img/logo.png',
                '/src/Themes/Marathon/Resources/public/img/slide1.jpg',
                '/src/Themes/Marathon/Resources/public/img/slide2.jpg',
                '/src/Themes/Marathon/Resources/public/img/slide3.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img1.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img2.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img3.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img4.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img5.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img6.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img7.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img8.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img9.jpg',
                '/src/Themes/Marathon/Resources/public/img/page1_img10.jpg',
            ],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ],
        'Luffy Marathon Website' => [
            'society' => 'Luffy Marathon Society',
            'domain' => 'luffy-marathon-society',
            'theme' =>  'Marathon',
            'layout' => 'marathon_layout',
            'render_system' => 'php',
            'expiration_date' => '2017-12-20 10:00:00',
            'modules' => [
                'navigation',
                'post',
            ],
            'templates' => [],
            'medias' => [],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadWebsite($manager);
        $this->setThemeWebsite($manager, 'Marathon', 'Marathon Website');
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
            'Jet\Themes\Marathon\Fixtures\LoadMedia',
            'Jet\Themes\Marathon\Fixtures\LoadTheme',
            'Jet\Themes\Marathon\Fixtures\LoadSociety',
            'Jet\Themes\Marathon\Fixtures\LoadTemplate'
        ];
    }
}