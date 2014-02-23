<?php

namespace Greibit\DemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function sidebarMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'greibit_demo_homepage'));
        $menu->addChild('About Me', array('route' => 'greibit_demo_homepage'))->setAttribute('icon', 'user');
        $menu->addChild('Sevices', array('route' => 'greibit_demo_homepage'));

        $menu["Home"]->addChild('Lorem ipsum', array('route' => 'greibit_demo_homepage'));
        $menu["Home"]->addChild('Duis aute', array('route' => 'greibit_demo_homepage'));
        $menu["Sevices"]->addChild('Duis aute', array('route' => 'greibit_demo_homepage'));
        $menu["Sevices"]->addChild('Lorem ipsum', array('route' => 'greibit_demo_homepage'));
        $menu["Home"]->addChild('Duis aute', array('route' => 'greibit_demo_homepage'));

        return $menu;
    }
}