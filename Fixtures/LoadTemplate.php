<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTemplate extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        /* Marathon templates */
        'marathon_layout' => [
            'name' => 'ThemeMarathonFileLayout',
            'title' => 'Theme Marathon Template',
            'content' => 'Marathon/Views/layout',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'marathon_navigation_partial' => [
            'name' => 'ThemeMarathonNavigationFilePartial',
            'title' => 'Theme Marathon Navigation Template',
            'content' => 'Marathon/Views/navigation',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'marathon_home_page_layout' => [
            'name' => 'ThemeMarathonHomePageFileLayout',
            'title' => 'Theme Marathon Home Page Template',
            'content' => 'Marathon/Views/index',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'marathon_gallery_layout' => [
            'name' => 'ThemeMarathonGalleryFileLayout',
            'title' => 'Theme Marathon Gallery Template',
            'content' => 'Marathon/Views/gallery',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTemplate($manager);
    }
}