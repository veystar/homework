<?php
namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', TextType::class)
            //->add('author')
            ->add('category')
            ->add('content')
            ->add('createdAt');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('category')
            //->add('author')
            ->add('createdAt');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')    
            ->addIdentifier('title')
            ->addIdentifier('category')
            //->addIdentifier('author')
            ->addIdentifier('createdAt')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => [],        
                    'delete' => []
                )
            ));
    }
}