<?php 

namespace AppBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DegreConseil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DegreConseilRepository")
 */

class DegreConseil
{
    

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * 
     * @ORM\Column(name="libelle" , type="string")
     */
    private $libelle;
    
    

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return DegreConseil
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return DegreConseil
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
