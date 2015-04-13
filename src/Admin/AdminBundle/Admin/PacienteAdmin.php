<?php
// src/Admin/AdminBundle/Admin/PacienteAdmin.php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PacienteAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {         
            $formMapper
            ->with('Paciente',
                    array(
                        'class'       => 'col-md-6',
                        'box_class'   => 'box box-solid box-danger',
                        'description' => 'Lorem ipsum',
                        // ...
                        ))
                ->add('nombre')
                ->add('apellido')
                ->add('edad')
                ->add('fecha_nac')
                ->add('direccion')
                ->add('seguro_social')
                ->add('est_form_act',null, array('label' => 'Estatus de forma actual'))
                ->add('medico_pref')
                ->add('telefono', null, array('help'=>'Introduzca el numero de telefono en el siguiente formato: 04XX-XXX.XX.XX'))
                ->add('contact_emerg')
                ->add('historia_med')->end()
            ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('nombre')
                ->add('apellido')
                ->add('edad')
                ->add('fecha_nac')
                ->add('direccion')
                ->add('seguro_social')
                ->add('medico_pref')
                ->add('telefono')
                ->add('contact_emerg')
                ->add('historia_med')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre')
            ->add('apellido')
            ->add('edad')
            ->add('fecha_nac', 'date', array('date' => 'format'))
            ->add('direccion')
            ->add('seguro_social')
            ->add('medico_pref')
            ->add('telefono')
            ->add('contact_emerg')
            ->add('historia_med')

        ;
    }
}