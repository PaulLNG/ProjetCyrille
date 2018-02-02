<?php 

namespace AppBundle\Service;

use Doctrine\ORM\EntityManagerInterface;


class ConseilService
{
    private $em; 
    private $conseilRepository;
    private $objetRepository;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        $this->conseilRepository = $this->em->getRepository('AppBundle:Conseil');
        $this->objetRepository = $this->em->getRepository('AppBundle:Objet');
    }
    
    public function getAllObjet()
    {
        
        $listObjet = $this->objetRepository->findAll();
        
        return $listObjet;
        
    }
    
    
    public function getObjetDetail($idObjet)
    {
        $objet = $this->objetRepository->findOneById($idObjet);
        
        return $objet;
    }
}