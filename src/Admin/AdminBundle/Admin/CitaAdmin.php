<?php
// src/Admin/AdminBundle/Admin/CitaAdmin.php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CitaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {         
            $formMapper
                ->add('fecha',null, array('label' => 'Fecha de la cita'))
                ->add('paciente',null, array('label' => 'Paciente'))
                ->add('realizada',null, array('label' => 'La cita ya fue realizada?'))
                ->add('medico',null, array('label' => 'Medico'))
                ->add('nota',null, array('label' => 'Diagnostico de la cita'))
            ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('fecha')
                ->add('paciente')
                ->add('realizada')
                ->add('medico')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('fecha')
            ->add('paciente')
            ->add('realizada')
            ->add('medico')

        ;
    }
}