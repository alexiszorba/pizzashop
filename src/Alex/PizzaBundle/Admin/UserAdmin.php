<?php

namespace Alex\PizzaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends Admin {

    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'name'
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('username')
                ->add('email')
                ->add('enabled')
                ->add('password')
                ->add('locked')
                ->add('expired', null, array('required' => false))
                ->add('roles')
                ->add('name')
                ->add('surname')
                ->add('address')
                ->add('telnr')
                ->add('promotie', null, array('required' => false))
                ->add('bemerking', null, array('required' => false))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('username')
                ->add('name')
                ->add('surname')
                 ->add('email')
                ->add('enabled')
                ->add('telnr')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('username')
                ->add('email')
                ->add('enabled')
                ->add('locked')
                ->add('expired', null, array('required' => false))
                ->add('roles')
                ->add('name')
                ->add('surname')
                ->add('address')
                ->add('telnr')
                ->add('promotie')
                ->add('bemerking')
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
                ->add('username')
                ->add('email')
                ->add('enabled')
                ->add('password')
                ->add('locked')
                ->add('expired')
                ->add('roles')
                ->add('name')
                ->add('surname')
                ->add('address')
                ->add('telnr')
                ->add('promotie')
                ->add('bemerking')
        ;
    }

}
