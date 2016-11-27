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
    public function onePвarameterAction($name)
    {
        return $this->render('GeekHubBlogBundle:Default:index1.html.twig', [
            'name' => $name,
        ]);
    }

    public function twoParametersAction($firstName, $lastName)
    {
        return $this->render('GeekHubBlogBundle:Default:index2.html.twig', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }
}
