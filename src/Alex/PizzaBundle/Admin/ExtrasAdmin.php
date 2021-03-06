<?php

namespace Alex\PizzaBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
 
class ExtrasAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'omschrijving'
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('omschrijving')
                ->add('kost')
                ->add('pizzas')
                 // help messages
                ->setHelps(array(
                    'pizzas' => $this->trans('click in whitespace in pizzas to add new pizzas')
        ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper                
                ->add('omschrijving')
                ->add('kost')
                ->add('pizzas')
       ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id')
                ->add('omschrijving')
                ->add('kost')
                ->add('pizzas')
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
                ->add('kost')
                ->add('pizzas')
        ;
    }

}