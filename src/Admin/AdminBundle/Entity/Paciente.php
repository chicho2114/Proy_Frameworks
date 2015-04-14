<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Paciente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Entity\PacienteRepository") 
 * @ORM\HasLifecycleCallbacks()
 */
class Paciente
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nac", type="date")
     */
    private $fechaNac;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text")
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_social", type="string", length=255)
     */
    private $seguroSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="forma_actual", type="text")
     */
    private $formaActual;

    /**
     * @var string
     *
     * @ORM\Column(name="medico_pref", type="string", length=255)
     */
    private $medicoPref;

    /**
     * @ORM\OneToMany(targetEntity="Telefono", mappedBy="paciente", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     */
    protected $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_emerg", type="string", length=255)
     */
    private $contactoEmerg;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telefonos = new ArrayCollection();
    }

    /**
     * __toString
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getNombre();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Paciente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Paciente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Paciente
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set fechaNac
     *
     * @param \DateTime $fechaNac
     * @return Paciente
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \DateTime 
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Paciente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set seguroSocial
     *
     * @param string $seguroSocial
     * @return Paciente
     */
    public function setSeguroSocial($seguroSocial)
    {
        $this->seguroSocial = $seguroSocial;

        return $this;
    }

    /**
     * Get seguroSocial
     *
     * @return string 
     */
    public function getSeguroSocial()
    {
        return $this->seguroSocial;
    }

    /**
     * Set formaActual
     *
     * @param string $formaActual
     * @return Paciente
     */
    public function setFormaActual($formaActual)
    {
        $this->formaActual = $formaActual;

        return $this;
    }

    /**
     * Get formaActual
     *
     * @return string 
     */
    public function getFormaActual()
    {
        return $this->formaActual;
    }

    /**
     * Set medicoPref
     *
     * @param string $medicoPref
     * @return Paciente
     */
    public function setMedicoPref($medicoPref)
    {
        $this->medicoPref = $medicoPref;

        return $this;
    }

    /**
     * Get medicoPref
     *
     * @return string 
     */
    public function getMedicoPref()
    {
        return $this->medicoPref;
    }

    /**
     * Set contactoEmerg
     *
     * @param string $contactoEmerg
     * @return Paciente
     */
    public function setContactoEmerg($contactoEmerg)
    {
        $this->contactoEmerg = $contactoEmerg;

        return $this;
    }

    /**
     * Get contactoEmerg
     *
     * @return string 
     */
    public function getContactoEmerg()
    {
        return $this->contactoEmerg;
    }

    /**
     * Add telefonos
     *
     * @param \Admin\AdminBundle\Entity\Telefono $telefonos
     * @return Paciente
     */
    public function addTelefono(\Admin\AdminBundle\Entity\Telefono $telefonos)
    {
        $telefonos->setPaciente($this);
        $this->telefonos->add($telefonos);
    }

    /**
     * Remove telefonos
     *
     * @param \Admin\AdminBundle\Entity\Telefono $telefonos
     */
    public function removeTelefono(\Admin\AdminBundle\Entity\Telefono $telefonos)
    {
        $this->telefonos->removeElement($telefonos);
    }

    /**
     * Get telefonos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    public function setTelefonos($telefonos)
    {
        if (count($telefonos) > 0) {
            foreach ($telefonos as $telefono) {
                $this->addTelefono($telefono);
            }
        }

        return $this;
    }
}
