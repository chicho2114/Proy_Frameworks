<?php
// src/Admin/AdminBundle/Admin/PacienteAdmin.php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class HistoriaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {         
            $formMapper
                ->add('paciente')
                ->add('fumador',null, array('label' => 'El paciente fuma?'))
                ->add('alcoholico',null, array('label' => 'El paciente toma bebidas alcoholicas?'))
                ->add('medicamentos')
                ->add('alergias')
                ->add('condicionAnt',null, array('label' => 'Condicion anterior del paciente'))
                ->add('medicamentos')
            ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('paciente')
                ->add('fumador')
                ->add('alcoholico')
                ->add('medicamentos')
                ->add('alergias')
                ->add('condicionAnt')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('paciente')
                ->add('fumador')
                ->add('alcoholico')
                ->add('medicamentos')


        ;
    }
}