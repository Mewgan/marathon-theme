<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Modules\Post\Services\LoadPostFixture;
use Jet\Services\LoadFixture;

class LoadAdminCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadPostFixture;
    use LoadNavigationFixture;
    use LoadFixture;

    protected $data = [
        /* Marathon fields */
        'marathon_seo_title' => [
            'scope' => 'specified',
            'title' => 'Meta titre',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Marathon Seo',
            'data' => [],
            'content' => []
        ],
        'marathon_seo_description' => [
            'scope' => 'specified',
            'title' => 'Meta description',
            'name' => 'meta_description',
            'type' => 'textarea',
            'position' => 1,
            'parent' => null,
            'cf' => 'Marathon Seo',
            'data' => [],
            'content' => []
        ],
        'marathon_seo_keywords' => [
            'scope' => 'specified',
            'title' => 'Meta mots clef',
            'name' => 'meta_keywords',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Marathon Seo',
            'data' => [],
            'content' => []
        ],
        /* Global CSS and JS */
        'marathon_css' => [
            'scope' => 'global',
            'title' => 'Css',
            'name' => 'css_block',
            'type' => 'editor',
            'position' => 0,
            'parent' => null,
            'cf' => 'Marathon Custom Css & Js',
            'data' => [
                'file_type' => 'css'
            ],
            'content' => ['value' => '']
        ],
        'marathon_js' => [
            'scope' => 'global',
            'title' => 'Javascript',
            'name' => 'js_block',
            'type' => 'editor',
            'position' => 1,
            'parent' => null,
            'cf' => 'Marathon Custom Css & Js',
            'data' => [
                'file_type' => 'javascript'
            ],
            'content' => ['value' => '']
        ],
        /* Global social networks */
        'marathon_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Marathon Social Network',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0,1,2,3]
            ]
        ],
        'marathon_social_name' => [
            'scope' => 'global',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'marathon_social',
            'cf' => 'Marathon Social Network',
            'data' => [],
            'content' => [
                'value' => [
                    'Facebook',
                    'Twitter',
                    'Google Plus',
                    'Instagram',
                ]
            ]
        ],
        'marathon_social_link' => [
            'scope' => 'global',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 1,
            'parent' => 'marathon_social',
            'cf' => 'Marathon Social Network',
            'data' => [],
            'content' => [
                'value' => [
                    '',
                    '',
                    '',
                    '',
                ]
            ]
        ],
        /* Global seo */
        'marathon_global_seo_analytics' => [
            'scope' => 'global',
            'title' => 'Google Analytics',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'description' => 'Renseigner votre script analytics',
            'cf' => 'Marathon Global Seo',
            'data' => [],
            'content' => []
        ],
        /* Global skin */
        'marathon_favicon' => [
            'scope' => 'global',
            'title' => 'Favicon',
            'name' => 'favicon',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Marathon Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/public/media/default/favicon.ico']
        ],
        'marathon_logo' => [
            'scope' => 'global',
            'title' => 'Logo',
            'name' => 'logo',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Marathon Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Marathon/Resources/public/img/logo.png']
        ],
        'marathon_booking' => [
            'scope' => 'global',
            'title' => 'Lien de réservation',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 1,
            'parent' => null,
            'cf' => 'Marathon Default Global',
            'data' => [],
            'content' => ['value' => '']
        ],
        /* Marathon home page fields */
        'marathon_home_carrousel' => [
            'scope' => 'specified',
            'title' => 'Carrousel',
            'name' => 'home_slider',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Marathon Home Page',
            'data' => [
                'min_row' => '3',
                'max_row' => '3'
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-marathon-home' => [0,1,2]
            ]
        ],
        'marathon_home_carrousel_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'marathon_home_carrousel',
            'cf' => 'Marathon Home Page',
            'data' => [],
            'content' => [
                'page@society-marathon-home' => [
                    'Courir pour la santé',
                    'Rapide comme le vent',
                    'Ne jamais s\'arrêter',
                ]
            ]
        ],
        'marathon_home_carrousel_img' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 1,
            'parent' => 'marathon_home_carrousel',
            'cf' => 'Marathon Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-marathon-home' => [
                    '/src/Themes/Marathon/Resources/public/img/slide1.jpg',
                    '/src/Themes/Marathon/Resources/public/img/slide2.jpg',
                    '/src/Themes/Marathon/Resources/public/img/slide3.jpg',
                ]
            ]
        ],
        'marathon_home_baseline' => [
            'scope' => 'specified',
            'title' => 'Texte du haut',
            'name' => 'home_baseline',
            'type' => 'string',
            'position' => 1,
            'parent' => null,
            'cf' => 'Marathon Home Page',
            'data' => [],
            'content' => ['page@society-marathon-home' => 'Le prochain marathon']
        ],
        'marathon_home_counter' => [
            'scope' => 'specified',
            'title' => 'Date de la prochaine course',
            'name' => 'home_counter',
            'type' => 'date',
            'position' => 2,
            'parent' => null,
            'cf' => 'Marathon Home Page',
            'data' => [
                'date_format' => 'yyyy-mm-dd'
            ],
            'content' => ['page@society-marathon-home' => '2017-07-27']
        ],
        'marathon_home_boxes_grid' => [
            'scope' => 'specified',
            'title' => 'Disposition des blocs',
            'name' => 'home_box_grid',
            'type' => 'select',
            'position' => 3,
            'parent' => null,
            'cf' => 'Marathon Home Page',
            'data' => [
                'contents' => [
                    ['key' => '6', 'value' => '2 Colonnes'],
                    ['key' => '4', 'value' => '3 Colonnes'],
                    ['key' => '3', 'value' => '4 Colonnes'],
                ],
                'multiple' => false
            ],
            'content' => ['page@society-marathon-home' => '4']
        ],
        'marathon_home_boxes' => [
            'scope' => 'specified',
            'title' => 'Blocs',
            'name' => 'home_boxes',
            'type' => 'repeater',
            'position' => 4,
            'parent' => null,
            'cf' => 'Marathon Home Page',
            'data' => [
                'min_row' => '2',
                'max_row' => '8'
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-marathon-home' => [0,1,2]
            ]
        ],
        'marathon_home_box_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'marathon_home_boxes',
            'cf' => 'Marathon Home Page',
            'data' => [],
            'content' => [
                'page@society-marathon-home' => [
                    'Courses',
                    'Galerie',
                    'Résultats',
                ]
            ]
        ],
        'marathon_home_box_img' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 1,
            'parent' => 'marathon_home_boxes',
            'cf' => 'Marathon Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-marathon-home' => [
                    '/src/Themes/Marathon/Resources/public/img/page1_img3.jpg',
                    '/src/Themes/Marathon/Resources/public/img/page1_img2.jpg',
                    '/src/Themes/Marathon/Resources/public/img/page1_img1.jpg',
                ]
            ]
        ],
        'marathon_home_box_link' => [
            'scope' => 'specified',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'navigation',
            'position' => 2,
            'parent' => 'marathon_home_boxes',
            'cf' => 'Marathon Home Page',
            'data' => [
                'types' => []
            ],
            'content' => [
                'page@society-marathon-home' => [
                    'page@society-marathon-home',
                    'page@society-marathon-home',
                    'page@society-marathon-home',
                ]
            ]
        ],
        'marathon_home_post' => [
            'scope' => 'specified',
            'title' => 'Article du bloc de gauche',
            'name' => 'home_left_block',
            'type' => 'post',
            'position' => 5,
            'parent' => null,
            'cf' => 'Marathon Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-marathon-home' => 'marathon-about-us']
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->addNavigationTypeCallback('post','getPostTypeId');
        $this->addNavigationTypeCallback('post_category','getPostCategoryTypeId');
        $this->addCustomFieldCallback('navigation', 'getCustomFieldNavigation');
        $this->addCustomFieldCallback('post', 'getCustomFieldPost');
        $this->loadAdminCustomField($manager);
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
            'Jet\Themes\Marathon\Fixtures\LoadPage',
            'Jet\Themes\Marathon\Fixtures\LoadWebsite',
            'Jet\Themes\Marathon\Fixtures\LoadCustomField'
        ];
    }
}