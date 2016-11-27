<?php

namespace GeekHub\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('GeekHubBlogBundle:Default:index.html.twig');
    }

    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function oneParameterAction($name)
    {
        return $this->render('GeekHubBlogBundle:Default:index.html.twig', [
            'name' => $name,
        ]);
    }
}
