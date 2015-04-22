<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ContEmergenciaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper

            ->add('nombre')
            ->add('apellido')
            ->add('relacion')
            ->add('telefonos')
            ->add('fecha')
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
            ->add('relacion')
            ->add('telefonos')
            ->add('fecha')
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
            ->with('Contacto de Emergencia')
                ->add('nombre')
                ->add('apellido')
                ->add('relacion','choice', array(
                        'choices'   => array(
                            'familiar'   => 'Familiar',
                            'conyugue' => 'Conyugue',
                            'amigo' => 'Amigo cercano',
                            'otro'   => 'Otro',
                        ),
                        'multiple'  => false,
                        'expanded'  => false,
                        'placeholder' => 'Seleccione la relacion que tiene con el paciente',
                    ))
                ->add('telefonos', 'sonata_type_collection', array(), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable'  => 'position'
                ))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Contacto de Emergencia')
                ->add('nombre')
                ->add('apellido')
                ->add('paciente')
                ->add('relacion')
                ->add('telefonos')
                ->add('fecha')
            ->end()
        ;
    }

    public function prePersist($ContEmergencia)
    {
        $this->preUpdate($ContEmergencia);
    }

    public function preUpdate($ContEmergencia)
    {
        $ContEmergencia->setTelefonos($ContEmergencia->getTelefonos());
    }
}
