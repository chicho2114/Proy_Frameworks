<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="Paciente")
 * @ORM\Entity
 */
class Paciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer", nullable=false)
     */
    private $edad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nac", type="date", nullable=false)
     */
    private $fecha_nac;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text", nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_social", type="string", length=255, nullable=false)
     */
    private $seguro_social;

    /**
     * @var string
     *
     * @ORM\Column(name="est_form_act", type="text", nullable=false)
     */
    private $est_form_act;

    /**
     * @var string
     *
     * @ORM\Column(name="medico_pref", type="string", length=255, nullable=false)
     */
    private $medico_pref;

    /**
     * @ORM\OneToMany(targetEntity="Telefono", mappedBy="telefono")
     */
    protected $telefono;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="contact_emerg", type="object", nullable=false)
     */
    private $contact_emerg;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="historia_med", type="object", nullable=false)
     */
    private $historia_med;



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
     * Set fecha_nac
     *
     * @param \DateTime $fechaNac
     * @return Paciente
     */
    public function setFechaNac($fechaNac)
    {
        $this->fecha_nac = $fechaNac;

        return $this;
    }

    /**
     * Get fecha_nac
     *
     * @return \DateTime 
     */
    public function getFechaNac()
    {
        return $this->fecha_nac;
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
     * Set seguro_social
     *
     * @param string $seguroSocial
     * @return Paciente
     */
    public function setSeguroSocial($seguroSocial)
    {
        $this->seguro_social = $seguroSocial;

        return $this;
    }

    /**
     * Get seguro_social
     *
     * @return string 
     */
    public function getSeguroSocial()
    {
        return $this->seguro_social;
    }

    /**
     * Set est_form_act
     *
     * @param string $estFormAct
     * @return Paciente
     */
    public function setEstFormAct($estFormAct)
    {
        $this->est_form_act = $estFormAct;

        return $this;
    }

    /**
     * Get est_form_act
     *
     * @return string 
     */
    public function getEstFormAct()
    {
        return $this->est_form_act;
    }

    /**
     * Set medico_pref
     *
     * @param string $medicoPref
     * @return Paciente
     */
    public function setMedicoPref($medicoPref)
    {
        $this->medico_pref = $medicoPref;

        return $this;
    }

    /**
     * Get medico_pref
     *
     * @return string 
     */
    public function getMedicoPref()
    {
        return $this->medico_pref;
    }

    /**
     * Set telefono
     *
     * @param \AdminAdminBundle\Entity\Telefono $telefono
     * @return Paciente
     */
    public function setTelefono(\AdminAdminBundle\Entity\Telefono $telefono)
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
     * Set contact_emerg
     *
     * @param \stdClass $contactEmerg
     * @return Paciente
     */
    public function setContactEmerg($contactEmerg)
    {
        $this->contact_emerg = $contactEmerg;

        return $this;
    }

    /**
     * Get contact_emerg
     *
     * @return \stdClass 
     */
    public function getContactEmerg()
    {
        return $this->contact_emerg;
    }

    /**
     * Set historia_med
     *
     * @param \stdClass $historiaMed
     * @return Paciente
     */
    public function setHistoriaMed($historiaMed)
    {
        $this->historia_med = $historiaMed;

        return $this;
    }

    /**
     * Get historia_med
     *
     * @return \stdClass 
     */
    public function getHistoriaMed()
    {
        return $this->historia_med;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telefono = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add telefono
     *
     * @param \Admin\AdminBundle\Entity\Telefono $telefono
     * @return Paciente
     */
    public function addTelefono(\Admin\AdminBundle\Entity\Telefono $telefono)
    {
        $this->telefono[] = $telefono;

        return $this;
    }

    /**
     * Remove telefono
     *
     * @param \Admin\AdminBundle\Entity\Telefono $telefono
     */
    public function removeTelefono(\Admin\AdminBundle\Entity\Telefono $telefono)
    {
        $this->telefono->removeElement($telefono);
    }
}
