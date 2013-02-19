<?php

namespace Admingenerator\GeneratorBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

//use Symfony\Component\Form\Extension\Core\Type\DateType;

class TimepickerType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setRequired(array(
            // 'parent_class',
            // 'title',
            // 'form_class'
        ));

        $resolver->setDefaults(array(
            'defaultTime' => 'current',
            'disableFocus' => false,
            'isOpen' => false,
            'minuteStep' => 15,
            'modalBackdrop' => false,
            'secondStep' => 15,
            'showSeconds' => false,
            'showInputs' => true,
            'showMeridian' => false,
            'template' => 'dropdown',
            'appendWidgetTo' => '.bootstrap-timepicker',
        ));

        $resolver->replaceDefaults(array(
            'widget' => 'single_text'
        ));
    }
    

    public function getParent(){
        return 'time';
    }


    public function getName()
    {
        return 'timepicker';
    }
}