<?php

namespace SandboxBundle\Controller;

use SandboxBundle\Service\TeddyBear;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/sandbox")
     */
    public function indexAction()
    {
        $teddyBear = $this->get('app.teddyBear');
        if (!$teddyBear->getHead())
            throw new \RuntimeException('Teddy does not have a head');
        else if (!$teddyBear->getBody())
            throw new \RuntimeException('Teddy does not have a body');
        return $this->render('SandboxBundle:Default:index.html.twig', array("teddyBear" => $teddyBear));
    }
}
