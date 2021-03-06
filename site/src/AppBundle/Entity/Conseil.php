<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conseil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ConseilRepository")
 */
class Conseil
{

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DegreConseil", cascade={"persist"})
     */
    private $degreConseil;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeObjet", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeConseil;

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="titre" , type="string")
     */
    private $titre;

    /**
     * @ORM\Column(name="contenu" , type="string")
     */
    private $contenu;

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
     * Set idType
     *
     * @param integer $idType
     *
     * @return Conseil
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
        
        return $this;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Conseil
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Conseil
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
        
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set degreConseil
     *
     * @param \AppBundle\Entity\DegreConseil $degreConseil
     *
     * @return Conseil
     */
    public function setDegreConseil(\AppBundle\Entity\DegreConseil $degreConseil = null)
    {
        $this->degreConseil = $degreConseil;
        
        return $this;
    }

    /**
     * Get degreConseil
     *
     * @return \AppBundle\Entity\DegreConseil
     */
    public function getDegreConseil()
    {
        return $this->degreConseil;
    }

    /**
     * Set typeObjet
     *
     * @param \AppBundle\Entity\TypeObjet $typeObjet
     *
     * @return Conseil
     */
    public function setTypeObjet(\AppBundle\Entity\TypeObjet $typeObjet = null)
    {
        $this->typeObjet = $typeObjet;
        
        return $this;
    }

    /**
     * Get typeObjet
     *
     * @return \AppBundle\Entity\TypeObjet
     */
    public function getTypeObjet()
    {
        return $this->typeObjet;
    }

    /**
     * Set typeConseil
     *
     * @param \AppBundle\Entity\TypeObjet $typeConseil
     *
     * @return Conseil
     */
    public function setTypeConseil(\AppBundle\Entity\TypeObjet $typeConseil)
    {
        $this->typeConseil = $typeConseil;
        
        return $this;
    }

    /**
     * Get typeConseil
     *
     * @return \AppBundle\Entity\TypeObjet
     */
    public function getTypeConseil()
    {
        return $this->typeConseil;
    }
}
