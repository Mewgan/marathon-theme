<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Services\LoadFixture;
use Jet\Modules\Post\Services\LoadPostFixture;

class LoadContent extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;
    use LoadNavigationFixture;

    protected $data = [
        /* Marathon website navigation module content */
        'marathon_navigation_content' => [
            'cat_mod' => 'navigation',
            'name' => 'Menu',
            'block' => 'navigation',
            'website' => 'marathon-society',
            'module' => 'navigation',
            'template' => 'marathon_navigation_partial',
            'section' => null,
            'page' => null,
            'data' => [
                'class' => '',
                'navigation' => 'marathon-menu'
            ]
        ],
        'marathon_list_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'articles',
            'block' => 'list_post',
            'website' => 'marathon-society',
            'module' => 'list-post',
            'template' => 'marathon_post_list_partial',
            'section' => null,
            'page' => 'society-marathon-list-post',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => '',
                'total_row' => 100,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'marathon_single_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Article',
            'block' => 'single_post',
            'website' => 'marathon-society',
            'module' => 'single-post',
            'template' => 'marathon_single_post_partial',
            'section' => null,
            'page' => 'society-marathon-single-post',
            'data' => [
                'class' => '',
                'db' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ]
            ]
        ],
        'marathon_list_home_news_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'actualités',
            'block' => 'home_list_news',
            'website' => 'marathon-society',
            'module' => 'list-post',
            'template' => 'marathon_home_list_news_partial',
            'section' => null,
            'page' => 'society-marathon-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'max' => '',
                'total_row' => 2,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->addContentCallback('post', 'getPostContent');
        $this->addContentCallback('navigation', 'getNavigationContent');
        $this->loadContent($manager);
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
            'Jet\Themes\Marathon\Fixtures\LoadPage',
            'Jet\Themes\Marathon\Fixtures\LoadTemplate',
            'Jet\Themes\Marathon\Fixtures\LoadPost',
            'Jet\Themes\Marathon\Fixtures\LoadNavigation',
        ];
    }
}