<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Referencia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Referencia
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
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @ORM\OneToOne(targetEntity="Visita", inversedBy="referencia")
     * @ORM\JoinColumn(name="visita_id", referencedColumnName="id")
     **/
    private $visita;

    /**
     * @ORM\OneToOne(targetEntity="Historia", inversedBy="referencia")
     * @ORM\JoinColumn(name="historia_id", referencedColumnName="id")
     **/
    private $historia;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="medico_id", referencedColumnName="id")
     **/
    private $medico;

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Referencia
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

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Referencia
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
     * @return Referencia
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
     * Set medico
     *
     * @param \Application\Sonata\UserBundle\Entity\User $medico
     * @return Referencia
     */
    public function setMedico(\Application\Sonata\UserBundle\Entity\User $medico = null)
    {
        $this->medico = $medico;

        return $this;
    }

    /**
     * Get medico
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getMedico()
    {
        return $this->medico;
    }

    /**
     * Set historia
     *
     * @param \Admin\AdminBundle\Entity\Historia $historia
     * @return Referencia
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
}
