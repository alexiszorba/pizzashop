<?php

namespace Alex\PizzaBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
 
class DetailsAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'bestelling'
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('aantal')
                ->add('prijs')
                ->add('promotie')
                 ->add('bestelling')
                ->add('type')
                ->add('size')
                ->add('pizza')
                 // help messages
                
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper                
                ->add('promotie')
                ->add('bestelling')
                ->add('type')
       ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id')
                 ->add('aantal')
                ->add('prijs')
                ->add('promotie')
                 ->add('bestelling')
                ->add('type')
                ->add('size')
                ->add('pizza')
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
                 ->add('aantal')
                ->add('prijs')
                ->add('promotie')
                 ->add('bestelling')
                ->add('type')
                ->add('size')
                ->add('pizza')
        ;
    }

}