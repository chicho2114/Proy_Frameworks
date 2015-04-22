<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diagnostico
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Diagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripccion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @ORM\OneToOne(targetEntity="Visita", inversedBy="diagnostico")
     * @ORM\JoinColumn(name="visita_id", referencedColumnName="id")
     **/
    private $visita;

    /**
     * @ORM\OneToOne(targetEntity="Historia", inversedBy="diagnostico")
     * @ORM\JoinColumn(name="historia_id", referencedColumnName="id")
     **/
    private $historia;

    /**
     * __toString
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getDescripcion();
    }

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
     * Set descripccion
     *
     * @param string $descripccion
     * @return Diagnostico
     */
    public function setDescripccion($descripccion)
    {
        $this->descripccion = $descripccion;

        return $this;
    }

    /**
     * Get descripccion
     *
     * @return string 
     */
    public function getDescripccion()
    {
        return $this->descripccion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Diagnostico
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set visita
     *
     * @param \Admin\AdminBundle\Entity\Visita $visita
     * @return Diagnostico
     */
    public function setVisita(\Admin\AdminBundle\Entity\Visita $visita = null)
    {
        $this->visita = $visita;

        return $this;
    }

    /**
     * Get visita
     *
     * @return \Admin\AdminBundle\Entity\Visita 
     */
    public function getVisita()
    {
        return $this->visita;
    }

    /**
     * Set historia
     *
     * @param \Admin\AdminBundle\Entity\Historia $historia
     * @return Diagnostico
     */
    public function setHistoria(\Admin\AdminBundle\Entity\Historia $historia = null)
    {
        $this->historia = $historia;

        return $this;
    }

    /**
     * Get historia
     *
     * @return \Admin\AdminBundle\Entity\Historia 
     */
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Diagnostico
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
