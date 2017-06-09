<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Models\PostCategory;

class LoadPostCategory extends AbstractFixture implements DependentFixtureInterface
{
    protected $data = [
        [
            'name' => 'Course',
            'slug' => 'course',
            'website' => 'Marathon Website'
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach($this->data as $key => $data) {
            $postCategory = (PostCategory::where('name',$data['name'])->count() == 0)
                ? new PostCategory()
                : PostCategory::findOneByName($data['name']);
            $postCategory->setName($data['name']);
            $postCategory->setSlug($data['slug']);
            if(isset($data['website'])) {
                $postCategory->setWebsite($this->getReference($data['website']));
            }
            $this->setReference($data['slug'], $postCategory);
            $manager->persist($postCategory);
        }
        $manager->flush();
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
        ];
    }

}