<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR
        ]);
    }

    /**
     * @Route("/homepage/", name="homepage")
     */
    public function homepageAction(Request $request)
    {
        $conseilService = $this->get('projet.service');
        
        $lesObjets = $conseilService->getAllObjet();
        
        return $this->render('default/homepage.html.twig', array(
            "lesObjets" => $lesObjets
        ));
    }

    /**
     * @Route("/objet/{idObjet}", name="objet")
     */
    public function objetAction(Request $request, $idObjet)
    {
        $conseilService = $this->get('projet.service');
        
        $objet = $conseilService->getObjetDetail($idObjet);
        
        return $this->render('default/objet.html.twig', array(
            "objet" => $objet
        ));
    }
    
    /**
     * @Route("/test/" , name="test")
     */
    public function testAction(Request $request)
    {
        return new Response("test");
    }
    
    
    
    
    
}
