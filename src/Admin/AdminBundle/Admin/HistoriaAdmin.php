<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class HistoriaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('condicionMedica')
            ->add('receta')
            ->add('diagnostico')
            ->add('referencia')
            ->add('tabaco')
            ->add('alcohol')
            ->add('altura')
            ->add('peso')
            ->add('presionArterial')
            ->add('frecuentaCardiaca')
            ->add('temperatura')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('condicionMedica')
            ->add('receta')
            ->add('diagnostico')
            ->add('referencia')
            ->add('alergia')
            ->add('tabaco')
            ->add('alcohol')
            ->add('altura')
            ->add('peso')
            ->add('presionArterial')
            ->add('frecuentaCardiaca')
            ->add('temperatura')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('paciente', 'sonata_type_model', array('required' => false))
            ->add('condicionMedica', null, array('required' => false, 'label' => 'Condicion Medica Inicial'))
            ->add('receta', 'sonata_type_model', array('required' => false, 'label' => 'Receta Medica Inicial'))
            ->add('diagnostico', 'sonata_type_model', array('required' => false, 'label' => 'Diagnostico Inicial'))
            ->add('referencia', 'sonata_type_model', array('required' => false, 'label' => 'Referencia Inicial'))
            ->add('alergia', 'sonata_type_model', array('multiple' => true, 'required' => false, 'label' => 'Alergias del Paciente'))
            ->add('medicamento', 'sonata_type_model', array('multiple' => true, 'required' => false, 'label' => 'Medicamentos Recetados'))
            ->add('notacita', 'sonata_type_model', array('multiple' => true, 'required' => false, 'label' => 'Notas de Citas'))
            ->add('tabaco', null, array('required' => false))
            ->add('alcohol', null, array('required' => false))
            ->add('altura')
            ->add('peso')
            ->add('presionArterial')
            ->add('frecuentaCardiaca')
            ->add('temperatura')
            ->add('citas', null, array('required' => false))
            ->add('visitas', null, array('required' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('condicionMedica')
            ->add('receta')
            ->add('diagnostico')
            ->add('referencia')
            ->add('tabaco')
            ->add('alcohol')
            ->add('altura')
            ->add('peso')
            ->add('presionArterial')
            ->add('frecuentaCardiaca')
            ->add('temperatura')
        ;
    }

    public function prePersist($historia)
    {
        $this->preUpdate($historia);
    }

    public function preUpdate($historia)
    {
        $historia->setCitas($historia->getCitas());
        $historia->setVisitas($historia->getVisitas());
    }
}
