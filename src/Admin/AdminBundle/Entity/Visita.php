<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Visita
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
     * @ORM\OneToOne(targetEntity="Referencia", mappedBy="visita")
     **/
    private $referencia;

    /**
     * @ORM\ManyToOne(targetEntity="Receta")
     * @ORM\JoinColumn(name="receta_id", referencedColumnName="id")
     **/
    private $receta;

    /**
     * @ORM\OneToOne(targetEntity="Diagnostico", mappedBy="visita")
     **/
    private $diagnostico;

    /**
     * @ORM\ManyToOne(targetEntity="Historia", inversedBy="visitas")
     * @ORM\JoinColumn(name="historia_id", referencedColumnName="id")
     */
    protected $historia;

    /**
     * __toString
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getDiagnostico();
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
     * Set referencia
     *
     * @param \Admin\AdminBundle\Entity\Referencia $referencia
     * @return Visita
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
     * Set receta
     *
     * @param \Admin\AdminBundle\Entity\Receta $receta
     * @return Visita
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
     * @return Visita
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
     * Set historia
     *
     * @param \Admin\AdminBundle\Entity\Historia $historia
     * @return Visita
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
