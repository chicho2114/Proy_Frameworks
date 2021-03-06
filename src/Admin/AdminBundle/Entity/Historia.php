<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Historia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Historia
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
     * @ORM\Column(name="condicion_medica", type="string", length=255)
     */
    private $condicionMedica;

    /**
     * @ORM\ManyToOne(targetEntity="Receta")
     * @ORM\JoinColumn(name="receta_id", referencedColumnName="id")
     **/
    private $receta;

    /**
     * @ORM\OneToOne(targetEntity="Diagnostico", mappedBy="historia", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     **/
    private $diagnostico;

    /**
     * @ORM\OneToOne(targetEntity="Referencia", mappedBy="historia", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     **/
    private $referencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tabaco", type="boolean")
     */
    private $tabaco;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alcohol", type="boolean")
     */
    private $alcohol;

    /**
     * @var float
     *
     * @ORM\Column(name="altura", type="float")
     */
    private $altura;

    /**
     * @var float
     *
     * @ORM\Column(name="peso", type="float")
     */
    private $peso;

    /**
     * @var float
     *
     * @ORM\Column(name="presion_arterial", type="float")
     */
    private $presionArterial;

    /**
     * @var float
     *
     * @ORM\Column(name="frecuenta_cardiaca", type="float")
     */
    private $frecuentaCardiaca;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatura", type="float")
     */
    private $temperatura;

    /**
     * @ORM\ManyToOne(targetEntity="Alergia")
     * @ORM\JoinColumn(name="alergia_id", referencedColumnName="id")
     **/
    private $alergia;

    /**
     * @ORM\ManyToOne(targetEntity="Medicamento")
     * @ORM\JoinColumn(name="medicamento_id", referencedColumnName="id")
     **/
    private $medicamento;

    /**
     * @ORM\OneToOne(targetEntity="NotaCita")
     * @ORM\JoinColumn(name="notacita_id", referencedColumnName="id")
     **/
    private $notacita;

    /**
     * @ORM\OneToOne(targetEntity="Paciente", mappedBy="historia")
     * @ORM\OrderBy({"id" = "ASC"})
     **/
    private $paciente;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="medico_id", referencedColumnName="id")
     **/
    private $redireccion;

    /**
     * @ORM\OneToMany(targetEntity="Cita", mappedBy="historia", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     */
    protected $citas;

    /**
     * @ORM\OneToMany(targetEntity="Visita", mappedBy="historia", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     */
    protected $visitas;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->citas = new ArrayCollection();
        $this->visitas = new ArrayCollection();
    }

    /**
     * __toString
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getPaciente();
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
     * Set condicionMedica
     *
     * @param string $condicionMedica
     * @return Historia
     */
    public function setCondicionMedica($condicionMedica)
    {
        $this->condicionMedica = $condicionMedica;

        return $this;
    }

    /**
     * Get condicionMedica
     *
     * @return string 
     */
    public function getCondicionMedica()
    {
        return $this->condicionMedica;
    }

    /**
     * Set tabaco
     *
     * @param boolean $tabaco
     * @return Historia
     */
    public function setTabaco($tabaco)
    {
        $this->tabaco = $tabaco;

        return $this;
    }

    /**
     * Get tabaco
     *
     * @return boolean 
     */
    public function getTabaco()
    {
        return $this->tabaco;
    }

    /**
     * Set alcohol
     *
     * @param boolean $alcohol
     * @return Historia
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * Get alcohol
     *
     * @return boolean 
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Set altura
     *
     * @param float $altura
     * @return Historia
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return float 
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set peso
     *
     * @param float $peso
     * @return Historia
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return float 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set presionArterial
     *
     * @param float $presionArterial
     * @return Historia
     */
    public function setPresionArterial($presionArterial)
    {
        $this->presionArterial = $presionArterial;

        return $this;
    }

    /**
     * Get presionArterial
     *
     * @return float 
     */
    public function getPresionArterial()
    {
        return $this->presionArterial;
    }

    /**
     * Set frecuentaCardiaca
     *
     * @param float $frecuentaCardiaca
     * @return Historia
     */
    public function setFrecuentaCardiaca($frecuentaCardiaca)
    {
        $this->frecuentaCardiaca = $frecuentaCardiaca;

        return $this;
    }

    /**
     * Get frecuentaCardiaca
     *
     * @return float 
     */
    public function getFrecuentaCardiaca()
    {
        return $this->frecuentaCardiaca;
    }

    /**
     * Set temperatura
     *
     * @param float $temperatura
     * @return Historia
     */
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    /**
     * Get temperatura
     *
     * @return float 
     */
    public function getTemperatura()
    {
        return $this->temperatura;
    }

    /**
     * Set receta
     *
     * @param \Admin\AdminBundle\Entity\Receta $receta
     * @return Historia
     */
    public function setReceta(\Admin\AdminBundle\Entity\Receta $receta = null)
    {
        $this->receta = $receta;

        return $this;
    }

    /**
     * Get receta
     *
     * @return \Admin\AdminBundle\Entity\Receta 
     */
    public function getReceta()
    {
        return $this->receta;
    }

    /**
     * Set diagnostico
     *
     * @param \Admin\AdminBundle\Entity\Diagnostico $diagnostico
     * @return Historia
     */
    public function setDiagnostico(\Admin\AdminBundle\Entity\Diagnostico $diagnostico = null)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return \Admin\AdminBundle\Entity\Diagnostico 
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set referencia
     *
     * @param \Admin\AdminBundle\Entity\Referencia $referencia
     * @return Historia
     */
    public function setReferencia(\Admin\AdminBundle\Entity\Referencia $referencia = null)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return \Admin\AdminBundle\Entity\Referencia 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set alergia
     *
     * @param \Admin\AdminBundle\Entity\Alergia $alergia
     * @return Historia
     */
    public function setAlergia(\Admin\AdminBundle\Entity\Alergia $alergia = null)
    {
        $this->alergia = $alergia;

        return $this;
    }

    /**
     * Get alergia
     *
     * @return \Admin\AdminBundle\Entity\Alergia 
     */
    public function getAlergia()
    {
        return $this->alergia;
    }

    /**
     * Set medicamento
     *
     * @param \Admin\AdminBundle\Entity\Medicamento $medicamento
     * @return Historia
     */
    public function setMedicamento(\Admin\AdminBundle\Entity\Medicamento $medicamento = null)
    {
        $this->medicamento = $medicamento;

        return $this;
    }

    /**
     * Get medicamento
     *
     * @return \Admin\AdminBundle\Entity\Medicamento 
     */
    public function getMedicamento()
    {
        return $this->medicamento;
    }

    /**
     * Set notacita
     *
     * @param \Admin\AdminBundle\Entity\NotaCita $notacita
     * @return Historia
     */
    public function setNotacita(\Admin\AdminBundle\Entity\NotaCita $notacita = null)
    {
        $this->notacita = $notacita;

        return $this;
    }

    /**
     * Get notacita
     *
     * @return \Admin\AdminBundle\Entity\NotaCita 
     */
    public function getNotacita()
    {
        return $this->notacita;
    }

    /**
     * Set paciente
     *
     * @param \Admin\AdminBundle\Entity\Paciente $paciente
     * @return Historia
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

    /**
     * Set redireccion
     *
     * @param \Application\Sonata\UserBundle\Entity\User $redireccion
     * @return Historia
     */
    public function setRedireccion(\Application\Sonata\UserBundle\Entity\User $redireccion = null)
    {
        $this->redireccion = $redireccion;

        return $this;
    }

    /**
     * Get redireccion
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getRedireccion()
    {
        return $this->redireccion;
    }

    /**
     * Add citas
     *
     * @param \Admin\AdminBundle\Entity\Cita $citas
     * @return Historia
     */
    public function addCita(\Admin\AdminBundle\Entity\Cita $citas)
    {
        $this->citas[] = $citas;

        return $this;
    }

    /**
     * Remove citas
     *
     * @param \Admin\AdminBundle\Entity\Cita $citas
     */
    public function removeCita(\Admin\AdminBundle\Entity\Cita $citas)
    {
        $this->citas->removeElement($citas);
    }

    /**
     * Get citas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCitas()
    {
        return $this->citas;
    }

    /**
     * Add visitas
     *
     * @param \Admin\AdminBundle\Entity\Visita $visitas
     * @return Historia
     */
    public function addVisita(\Admin\AdminBundle\Entity\Visita $visitas)
    {
        $this->visitas[] = $visitas;

        return $this;
    }

    /**
     * Remove visitas
     *
     * @param \Admin\AdminBundle\Entity\Visita $visitas
     */
    public function removeVisita(\Admin\AdminBundle\Entity\Visita $visitas)
    {
        $this->visitas->removeElement($visitas);
    }

    /**
     * Get visitas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVisitas()
    {
        return $this->visitas;
    }
}
