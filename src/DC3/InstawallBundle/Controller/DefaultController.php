<?php

namespace DC3\InstawallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home_page")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("about", name="about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
}

