<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PacienteAdmin extends Admin
{
    //public $supportsPreviewMode = true;
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('apellido')
            ->add('edad')
            ->add('fechaNac',null,  array('label' => 'Fecha de nacimiento'))
            ->add('telefonos')
            ->add('direccion')
            ->add('seguroSocial')
            ->add('formaActual')
            ->add('medicoPref', null, array('label' => 'Médico'))
            ->add('contactoEmerg', null, array('label' => 'Contacto de emergencia'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('apellido')
            ->add('edad')
            ->add('fechaNac', 'date', array('label' => 'Fecha de nacimiento'))
            ->add('seguroSocial')
            ->add('medicoPref', null, array('label' => 'Médico'))
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
            ->tab('Paciente')
                ->with('Datos del paciente', array(
                            'class'       => 'col-md-6',
                            
                            ))
                    ->add('nombre')
                    ->add('apellido')
                    ->add('edad')
                    ->add('fechaNac', null, array('label' => 'Fecha de Nacimiento', 'years'=> range(1920, date('Y'))))
                    ->add('telefonos', 'sonata_type_collection', array(), array(
                        'edit' => 'inline',
                        'inline' => 'table',
                        'sortable'  => 'position'
                    ))
                    ->add('direccion')
                ->end()
                ->with('', array(
                            'class'       => 'col-md-6',
                            
                            ))
                    ->add('seguroSocial')
                    ->add('formaActual', null, array('label' => 'Forma actual del paciente', 'help'=>'Introduce una breve descripción del estatus actual del paciente'))
                    ->add('medicoPref', null, array('label' => 'Médico'))
                    ->add('contactoEmerg', 'sonata_type_model', array('multiple' => true, 'label' => 'Contacto de emergencia'))
                    ->add('historia', 'sonata_type_model', array( 'required'=>false, 'label' => 'Crear historia clinica'))
                ->end()
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Paciente')
                ->add('nombre')
                ->add('apellido')
                ->add('edad')
                ->add('fechaNac', 'date', array('label' => 'Fecha de nacimiento', 'years'=> range(1920, date('Y'))))
                ->add('telefonos')
                ->add('direccion')
                ->add('seguroSocial')
                ->add('formaActual')
                ->add('medicoPref', null, array('label' => 'Médico'))
                ->add('contactoEmerg', null, array('label' => 'Contacto(s) de emergencia'))
            ->end();
        ;
    }

    public function prePersist($paciente)
    {
        $this->preUpdate($paciente);
    }

    public function preUpdate($paciente)
    {
        $paciente->setTelefonos($paciente->getTelefonos());
        $paciente->setContactoEmerg($paciente->getContactoEmerg());
        $paciente->setHistoria($paciente->getHistoria());
    }
}
