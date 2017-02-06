<?php

namespace WebCampBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('UserBundle:Security:login.html.twig');

        return new Response($content);
    }

    public function usersAction()
    {
        $content = $this->get('templating')->render('WebCampBundle:Advert:users.html.twig');

        return new Response($content);
    }
}