<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PacienteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombre')
            ->add('apellido')
            ->add('edad')
            ->add('fechaNac')
            ->add('telefonos')
            ->add('direccion')
            ->add('seguroSocial')
            ->add('formaActual')
            ->add('medicoPref')
            ->add('contactoEmerg')
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
            ->add('fechaNac', 'date', array(
                    'pattern' => 'dd MMM Y G',
                    'locale' => 'en',
                    'timezone' => 'America/Caracas',
                ))
            ->add('telefonos')
            ->add('seguroSocial')
            ->add('medicoPref')
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
            ->add('edad')
            ->add('fechaNac')
            ->add('telefonos', 'sonata_type_collection', array(), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable'  => 'position'
            ))
            ->add('direccion')
            ->add('seguroSocial')
            ->add('formaActual')
            ->add('medicoPref')
            ->add('contactoEmerg')
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
            ->add('edad')
            ->add('fechaNac')
            ->add('telefonos')
            ->add('direccion')
            ->add('seguroSocial')
            ->add('formaActual')
            ->add('medicoPref')
            ->add('contactoEmerg')
        ;
    }

    public function prePersist($paciente)
    {
        $this->preUpdate($paciente);
    }

    public function preUpdate($paciente)
    {
        $paciente->setTelefonos($paciente->getTelefonos());
    }
}
