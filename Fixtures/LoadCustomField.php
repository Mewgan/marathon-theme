<?php

namespace Jet\Themes\Marathon\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadCustomField extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Marathon Default Global' => [
            'title' => 'Données globales',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'website' => 'Marathon Website'
        ],
        'Marathon Global Seo' => [
            'title' => 'Google analytics',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'website' => 'Marathon Website'
        ],
        'Marathon Social Network' => [
            'title' => 'Réseaux sociaux',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'website' => 'Marathon Website'
        ],
        'Marathon Custom Css & Js' => [
            'title' => 'Css & Js',
            'rule' => 'global',
            'operation' => '=',
            'value' => null,
            'access_level' => 2,
            'website' => 'Marathon Website',
        ],
        'Marathon Seo' => [
            'title' => 'SEO Référencement naturel - Pour améliorer vos positions dans Google veuillez remplir les champs suivants',
            'rule' => 'everywhere',
            'operation' => '=',
            'value' => null,
            'website' => 'Marathon Website',
        ],
        'Marathon Home Page' => [
            'title' => 'Page d\'accueil',
            'rule' => 'page',
            'operation' => '=',
            'reference' => 'society-marathon-home',
            'website' => 'Marathon Website'
        ],
        'Marathon Gallery Page' => [
            'title' => 'Galerie',
            'rule' => 'page',
            'operation' => '=',
            'reference' => 'society-marathon-gallery',
            'website' => 'Marathon Website'
        ],
        'Marathon Race Category' => [
            'title' => 'Catégorie course',
            'rule' => 'post_category',
            'operation' => '=',
            'reference' => 'course',
            'website' => 'Marathon Website'
        ],
    ];


    public function load(ObjectManager $manager)
    {
        $this->loadCustomField($manager);
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
        ];
    }
}