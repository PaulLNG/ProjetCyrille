<?php 

namespace AppBundle\Entity;


class TypeConseil 
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    /**
     * @ORM\Column(name="nom" , type="string")
     */
    private $nom;
    
    
    
}