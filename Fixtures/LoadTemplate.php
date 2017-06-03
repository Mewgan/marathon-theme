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
        'marathon_home_list_news_partial' => [
            'name' => 'ThemeMarathonHomeNewsListFilePartial',
            'title' => 'Theme Marathon Home News List Template',
            'content' => 'Marathon/Views/home_list_news',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'marathon_page_layout' => [
            'name' => 'ThemeMarathonPageFileLayout',
            'title' => 'Theme Marathon Page Template',
            'content' => 'Marathon/Views/page',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'marathon_single_post_partial' => [
            'name' => 'ThemeMarathonPostFilePartial',
            'title' => 'Theme Marathon Post Template',
            'content' => 'Marathon/Views/post',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'marathon_post_list_partial' => [
            'name' => 'ThemeMarathonPostListFilePartial',
            'title' => 'Theme Marathon Post List Template',
            'content' => 'Marathon/Views/post_list',
            'category' => 'partial',
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
        'marathon_contact_layout' => [
            'name' => 'ThemeMarathonContactFileLayout',
            'title' => 'Theme Marathon Contact Template',
            'content' => 'Marathon/Views/contact',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTemplate($manager);
    }
}