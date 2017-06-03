<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadPage extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        /* Marathon pages */
        'society-marathon-single-post' =>  [
            'title' => 'Page d\'un article',
            'route' => 'module:post.type:dynamic.action:read',
            'website' => 'Marathon Website',
            'layout' => 'marathon_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-marathon-list-post' =>  [
            'title' => 'Liste d\'articles',
            'route' => 'module:post.type:dynamic.action:all',
            'website' => 'Marathon Website',
            'layout' => 'marathon_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-marathon-home' =>  [
            'title' => 'Accueil',
            'route' => 'home',
            'website' => 'Marathon Website',
            'layout' => 'marathon_home_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-marathon-gallery' =>  [
            'title' => 'Galerie',
            'route' => 'module:gallery.type:static.action:all',
            'website' => 'Marathon Website',
            'layout' => 'marathon_gallery_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-marathon-contact' =>  [
            'title' => 'Contact',
            'route' => 'module:contact.type:static.action:show',
            'website' => 'Marathon Website',
            'layout' => 'marathon_contact_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPage($manager);
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
            'Jet\Themes\Marathon\Fixtures\LoadTemplate',
        ];
    }
}