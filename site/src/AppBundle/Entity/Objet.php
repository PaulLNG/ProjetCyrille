<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ObjetRepository")
 */

class Objet
{
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\TypeObjet", cascade={"persist"})
     */
    private $typeObjet;    
    
    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Conseil", cascade={"persist"})
     */
    private $lesConseils;
    
    
    
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
    
    
    /**
     * 
     * @ORM\Column(name="consommation" , type="integer")
     */
    private $consommation;
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Objet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set typeObjet
     *
     * @param string $typeObjet
     *
     * @return Objet
     */
    public function setTypeObjet($typeObjet)
    {
        $this->typeObjet = $typeObjet;

        return $this;
    }

    /**
     * Get typeObjet
     *
     * @return string
     */
    public function getTypeObjet()
    {
        return $this->typeObjet;
    }

    /**
     * Set conseil
     *
     * @param \AppBundle\Entity\Conseil $conseil
     *
     * @return Objet
     */
    public function setConseil(\AppBundle\Entity\Conseil $conseil = null)
    {
        $this->conseil = $conseil;

        return $this;
    }

    /**
     * Get conseil
     *
     * @return \AppBundle\Entity\Conseil
     */
    public function getConseil()
    {
        return $this->conseil;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesConseils = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lesConseil
     *
     * @param \AppBundle\Entity\Conseil $lesConseil
     *
     * @return Objet
     */
    public function addLesConseil(\AppBundle\Entity\Conseil $lesConseil)
    {
        $this->lesConseils[] = $lesConseil;

        return $this;
    }

    /**
     * Remove lesConseil
     *
     * @param \AppBundle\Entity\Conseil $lesConseil
     */
    public function removeLesConseil(\AppBundle\Entity\Conseil $lesConseil)
    {
        $this->lesConseils->removeElement($lesConseil);
    }

    /**
     * Get lesConseils
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesConseils()
    {
        return $this->lesConseils;
    }

    /**
     * Set consommation
     *
     * @param integer $consommation
     *
     * @return Objet
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;

        return $this;
    }

    /**
     * Get consommation
     *
     * @return integer
     */
    public function getConsommation()
    {
        return $this->consommation;
    }
}
