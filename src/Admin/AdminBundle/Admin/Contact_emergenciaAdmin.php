<?php
// src/Admin/AdminBundle/Admin/PacienteAdmin.php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class Contact_emergenciaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {         
            $formMapper
                ->add('nombre')
                ->add('apellido')
                ->add('telefono')
                ->add('relacion')
                ->add('fecha',null, array('label' => 'Fecha en que fue añadido'))
                ->add('paciente')
            ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('nombre')
                ->add('apellido')
                ->add('telefono')
                ->add('relacion')
                ->add('fecha',null, array('label' => 'Fecha en que fue añadido'))
                ->add('paciente')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('paciente')
                ->add('nombre')
                ->add('apellido')
                ->add('telefono')
                ->add('relacion')
                ->add('fecha',null, array('label' => 'Fecha en que fue añadido'))


        ;
    }
}