<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cita
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Entity\CitaRepository")
 */
class Cita
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="text")
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="realizada", type="boolean")
     */
    private $realizada;

    /**
     * @var string
     *
     * @ORM\Column(name="paciente", type="string", length=255)
     */
    private $paciente;

    /**
     * @var string
     *
     * @ORM\Column(name="medico", type="string", length=255)
     */
    private $medico;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Cita
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
     * Set nota
     *
     * @param string $nota
     * @return Cita
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set realizada
     *
     * @param boolean $realizada
     * @return Cita
     */
    public function setRealizada($realizada)
    {
        $this->realizada = $realizada;

        return $this;
    }

    /**
     * Get realizada
     *
     * @return boolean 
     */
    public function getRealizada()
    {
        return $this->realizada;
    }

    /**
     * Set paciente
     *
     * @param string $paciente
     * @return Cita
     */
    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return string 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * Set medico
     *
     * @param string $medico
     * @return Cita
     */
    public function setMedico($medico)
    {
        $this->medico = $medico;

        return $this;
    }

    /**
     * Get medico
     *
     * @return string 
     */
    public function getMedico()
    {
        return $this->medico;
    }
}
