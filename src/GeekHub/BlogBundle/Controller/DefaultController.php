<?php

namespace GeekHub\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekHubBlogBundle:Default:index.html.twig');
    }
}