<?php

namespace Greibit\CrudGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GreibitCrudGeneratorBundle:Default:index.html.twig', array('name' => $name));
    }
}
