<?php

namespace Alex\PizzaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class KostenAdmin extends Admin {

    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'id'
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('postnr')
                ->add('bedrag')
                ->add('gratistarief')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('postnr')
                ->add('bedrag')
                ->add('gratistarief')

        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id')
                ->add('postnr')
                ->add('bedrag')
                ->add('gratistarief')
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
                ->add('postnr')
                ->add('bedrag')
                ->add('gratistarief')
        ;
    }

}
