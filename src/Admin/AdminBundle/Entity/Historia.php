<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Entity\HistoriaRepository")
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
     * @ORM\Column(name="paciente", type="string", length=255)
     */
    private $paciente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fumador", type="boolean")
     */
    private $fumador;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alcoholico", type="boolean")
     */
    private $alcoholico;

    /**
     * @var string
     *
     * @ORM\Column(name="medicamentos", type="text")
     */
    private $medicamentos;

    /**
     * @var string
     *
     * @ORM\Column(name="alergias", type="text")
     */
    private $alergias;

    /**
     * @var string
     *
     * @ORM\Column(name="condicion_ant", type="text")
     */
    private $condicionAnt;


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
     * Set paciente
     *
     * @param string $paciente
     * @return Historia
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
     * Set fumador
     *
     * @param boolean $fumador
     * @return Historia
     */
    public function setFumador($fumador)
    {
        $this->fumador = $fumador;

        return $this;
    }

    /**
     * Get fumador
     *
     * @return boolean 
     */
    public function getFumador()
    {
        return $this->fumador;
    }

    /**
     * Set alcoholico
     *
     * @param boolean $alcoholico
     * @return Historia
     */
    public function setAlcoholico($alcoholico)
    {
        $this->alcoholico = $alcoholico;

        return $this;
    }

    /**
     * Get alcoholico
     *
     * @return boolean 
     */
    public function getAlcoholico()
    {
        return $this->alcoholico;
    }

    /**
     * Set medicamentos
     *
     * @param string $medicamentos
     * @return Historia
     */
    public function setMedicamentos($medicamentos)
    {
        $this->medicamentos = $medicamentos;

        return $this;
    }

    /**
     * Get medicamentos
     *
     * @return string 
     */
    public function getMedicamentos()
    {
        return $this->medicamentos;
    }

    /**
     * Set alergias
     *
     * @param string $alergias
     * @return Historia
     */
    public function setAlergias($alergias)
    {
        $this->alergias = $alergias;

        return $this;
    }

    /**
     * Get alergias
     *
     * @return string 
     */
    public function getAlergias()
    {
        return $this->alergias;
    }

    /**
     * Set condicionAnt
     *
     * @param string $condicionAnt
     * @return Historia
     */
    public function setCondicionAnt($condicionAnt)
    {
        $this->condicionAnt = $condicionAnt;

        return $this;
    }

    /**
     * Get condicionAnt
     *
     * @return string 
     */
    public function getCondicionAnt()
    {
        return $this->condicionAnt;
    }
}
