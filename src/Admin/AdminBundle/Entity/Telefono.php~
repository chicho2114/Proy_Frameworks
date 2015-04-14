<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefono
 *
 * @ORM\Table(name="Telefono")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Entity\TelefonoRepository")
 */
class Telefono
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
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="telefonos")
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id")
     */
    protected $paciente;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;
    

    /**
     * __toString
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getTelefono();
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
     * Set telefono
     *
     * @param string $telefono
     * @return Telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Telefono
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set paciente
     *
     * @param \Admin\AdminBundle\Entity\Paciente $paciente
     * @return Telefono
     */
    public function setPaciente(\Admin\AdminBundle\Entity\Paciente $paciente = null)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return \Admin\AdminBundle\Entity\Paciente 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
}
