<?php

namespace Admingenerator\GeneratorBundle\Builder\Admin;

/**
 * This builder generates php for lists actions
 * @author cedric Lombardot
 */
class ListBuilderTemplate extends ListBuilder
{
    public function getOutputName()
    {
        return 'Resources/views/'.$this->getBaseGeneratorName().'/list.html.twig';
    }
}
