<?php

namespace Greibit\PanelAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GreibitPanelAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
