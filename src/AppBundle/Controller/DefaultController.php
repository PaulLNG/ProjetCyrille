<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/homepage", name="homepage")
     */
    public function homepageAction(Request $request)
    {
        
        return $this->render('default/homepage.html.twig');
    }
    
    /**
     * @Route("/conseil/{idConseil}", name="conseil")
     */
    public function conseilAction(Request $request , $idConseil)
    {
        
        return $this->render('default/conseil.html.twig' , array("idConseil" => $idConseil , "titre" => "Economie Energie" , "contenu" => "Blablabla" ,
        "type" => "informatique"));
    }
    
    
}
