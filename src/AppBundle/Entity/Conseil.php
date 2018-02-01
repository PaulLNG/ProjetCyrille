<?php 


namespace AppBundle\Entity;


class Conseil 
{

    
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="idType", type="integer")
     */
    private $idType;
    
    /**
     * @ORM\Column(name="titre" , type="string")
     */
    private $titre;
    
    /**
     * @ORM\Column(name="contenu" , type="string")
     */
    private $contenu;
    



}