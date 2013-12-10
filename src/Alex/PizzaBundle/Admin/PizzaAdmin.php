<?php

namespace Alex\PizzaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class PizzaAdmin extends Admin {

// setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'naam'
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('naam')
                ->add('omschrijving')
                ->add('basisprijs')
                //->add('extras')
                ->add('extras', 'sonata_type_collection', array(
                // Prevents the "Delete" option from being displayed
                'type_options' => array('delete' => false)
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable' => 'position',
            ))
                // help messages 
                ->setHelps(array(
                    'extras' => $this->trans('click in whitespace in extras to add new extras')
                ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('naam')
                ->add('omschrijving')
                ->add('basisprijs')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('naam')
                ->add('omschrijving')
                ->add('basisprijs')
                ->add('extras')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'view' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

    protected function configureShowField(ShowMapper $showMapper) {
        $showMapper
                ->add('naam')
                ->add('omschrijving')
                ->add('basisprijs')
                ->add('extras')
        ;
    }

   
}
