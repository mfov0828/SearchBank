<?php

namespace BuscadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use sensio\Bundle\FrameworkExreaBundle\configuration\Method;
use Symfony\Component\HttpFoundation\response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("list/{page}", name=buscador, requeriments={"page": "\d+"})
     * @Method({"GET"})
     */
    public function indexAction($page=1)
    {
        return $this->render('BuscadorBundle:Default:index.html.twig',
                array(
                    'page' => $page
                ));
    }
}
