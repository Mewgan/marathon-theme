<?php
namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Modules\Post\Services\LoadPostFixture;

/**
 * Class LoadNavigationItem
 * @package Jet\Modules\Navigation\Fixtures
 */
class LoadNavigationItem extends AbstractFixture implements DependentFixtureInterface
{
    use LoadPostFixture;
    use LoadNavigationFixture;
    /**
     * @var array
     */
    protected $data = [
        [
            'title' => 'Accueil',
            'navigation' => 'marathon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/',
            'route' => 'home',
            'type' => 'page',
            'type_id' => 'society-marathon-home',
            'position' => 0,
            'website' => 'marathon-society',
        ],
        [
            'title' => 'Actualités',
            'navigation' => 'marathon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/articles/actualite',
            'route' => 'module:post.type:dynamic.action:all',
            'type' => 'post_category',
            'type_id' => 'actualite',
            'position' => 1,
            'website' => 'marathon-society',
        ],
        [
            'title' => 'Calendrier',
            'navigation' => 'marathon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/articles/course',
            'route' => 'module:post.type:dynamic.action:all',
            'type' => 'post_category',
            'type_id' => 'course',
            'position' => 2,
            'website' => 'marathon-society',
        ],
        [
            'title' => 'Galeries',
            'navigation' => 'marathon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/galerie',
            'route' => 'module:gallery.type:static.action:all',
            'type' => 'page',
            'type_id' => 'society-marathon-gallery',
            'position' => 3,
            'website' => 'marathon-society',
        ],
        [
            'title' => 'Contact',
            'navigation' => 'marathon-menu',
            'parent' => null,
            'children' => [],
            'url' => '/contact',
            'route' => 'module:contact.type:static.action:show',
            'type' => 'page',
            'type_id' => 'society-marathon-contact',
            'position' => 4,
            'website' => 'marathon-society',
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->addNavigationTypeCallback('post','getPostTypeId');
        $this->addNavigationTypeCallback('post_category','getPostCategoryTypeId');
        $this->loadNavigationItem($manager);
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
            'Jet\Themes\Marathon\Fixtures\LoadNavigation',
            'Jet\Themes\Marathon\Fixtures\LoadPage',
            'Jet\Themes\Marathon\Fixtures\LoadPostCategory'
        ];
    }
}