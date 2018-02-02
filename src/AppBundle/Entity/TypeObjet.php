<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeObjet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TypeConseilRepository")
 */
class TypeObjet
{

    /**
     * @ORM\Column(name="id" , type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="nom" , type="string")
     */
    private $nom;

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
     * @param integer $nom
     *
     * @return TypeObjet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        
        return $this;
    }

    /**
     * Get nom
     *
     * @return integer
     */
    public function getNom()
    {
        return $this->nom;
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
     * @return TypeObjet
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
     * Set lesConseils
     *
     * @param \AppBundle\Entity\Conseil $lesConseils
     *
     * @return TypeObjet
     */
    public function setLesConseils(\AppBundle\Entity\Conseil $lesConseils)
    {
        $this->lesConseils = $lesConseils;
        
        return $this;
    }
}
