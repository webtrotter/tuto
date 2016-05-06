<?php

namespace ISTutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        return $this->render('ISTutoBundle:Advert:index.html.twig');
    }
}
