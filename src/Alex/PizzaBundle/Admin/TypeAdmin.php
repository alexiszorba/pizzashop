<?php

namespace Alex\PizzaBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
 
class TypeAdmin extends Admin
{
 // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'id'
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('omschrijving')
                ->add('extrakost')                
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('omschrijving')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('omschrijving')
                ->add('extrakost')
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
                ->add('omschrijving')
                ->add('extrakost')
        ;
    }

}