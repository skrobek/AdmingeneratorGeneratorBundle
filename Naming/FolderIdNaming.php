<?php

namespace Admingenerator\GeneratorBundle\Naming;

use  Vich\UploaderBundle\Naming\DirectoryNamerInterface;
use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
 * NamerInterface.
 *
 * @author Pawel Skroban <pskrobek@gmail.com>
 */
class FolderIdNaming implements DirectoryNamerInterface
{
    public function directoryName($obj, PropertyMapping $mapping) {
        return $mapping->getUploadDestination().'/'.$obj->getObject()->getId();
    }
}