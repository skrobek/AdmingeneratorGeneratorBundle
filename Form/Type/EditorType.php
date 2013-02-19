<?php

namespace Admingenerator\GeneratorBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class EditorType extends AbstractType
{    

    public function getParent(){
        return 'textarea';
    }


    public function getName()
    {
        return 'editor';
    }
}