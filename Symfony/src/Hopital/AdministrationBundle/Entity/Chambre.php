<?php

namespace Hopital\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity(repositoryClass="Hopital\AdministrationBundle\Repository\ChambreRepository")
 */
class Chambre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
    *@var Service $leservice
  
    *@ORM\ManyToOne(targetEntity="Service")
    */
    private $leservice;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Chambre
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

    /**
     * Set leservice
     *
     * @param \Hopital\AdministrationBundle\Entity\Service $leservice
     *
     * @return Chambre
     */
    public function setLeservice(\Hopital\AdministrationBundle\Entity\Service $leservice = null)
    {
        $this->leservice = $leservice;

        return $this;
    }

    /**
     * Get leservice
     *
     * @return \Hopital\AdministrationBundle\Entity\Service
     */
    public function getLeservice()
    {
        return $this->leservice;
    }
}
