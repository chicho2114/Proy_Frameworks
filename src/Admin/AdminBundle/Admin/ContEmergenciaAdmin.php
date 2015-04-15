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
            ->add('fecha', null, array('label' => 'Introduzca la fecha en que esta añadiendo al paciente'))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre')
            ->add('apellido')
            ->add('relacion')
            ->add('fecha')
        ;
    }
}
