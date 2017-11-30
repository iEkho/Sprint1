<?php

namespace Hopital\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sejour
 *
 * @ORM\Table(name="sejour")
 * @ORM\Entity(repositoryClass="Hopital\AdministrationBundle\Repository\SejourRepository")
 */
class Sejour
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=true)
     */
    private $dateFin;
	
	/**
     * @var int
     *
     * @ORM\Column(name="numLit", type="integer")
     */
    private $numLit;

	/**
	*@var Patient $lepatient

	*@ORM\ManyToOne(targetEntity="Patient")
	*/
	private $lepatient;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Sejour
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Sejour
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set lepatient
     *
     * @param \Hopital\AdministrationBundle\Entity\Patient $lepatient
     *
     * @return Sejour
     */
    public function setLepatient(\Hopital\AdministrationBundle\Entity\Patient $lepatient = null)
    {
        $this->lepatient = $lepatient;

        return $this;
    }

    /**
     * Get lepatient
     *
     * @return \Hopital\AdministrationBundle\Entity\Patient
     */
    public function getLepatient()
    {
        return $this->lepatient;
    }

    /**
     * Set numLit
     *
     * @param integer $numLit
     *
     * @return Sejour
     */
    public function setNumLit($numLit)
    {
        $this->numLit = $numLit;
    
        return $this;
    }

    /**
     * Get numLit
     *
     * @return integer
     */
    public function getNumLit()
    {
        return $this->numLit;
    }
}
