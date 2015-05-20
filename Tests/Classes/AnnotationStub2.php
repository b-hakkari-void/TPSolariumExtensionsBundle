<?php
/**
 * AnnotationStub2.php
 *
 * This file is part of the SolariumExtensionsBundle.
 * Read the LICENSE file in the root of the project for information on copyright.
 *
 * @author Thomas Ploch <tp@responsive-code.de>
 * @since  19.03.13
 */
namespace TP\SolariumExtensionsBundle\Tests\Classes;

use TP\SolariumExtensionsBundle\Doctrine\Annotations as Solarium;

/**
 * Class AnnotationStub2
 *
 * @package TP\SolariumExtensionsBundle\Tests\Classes
 *
 * @Solarium\Document("solarium.client.default")
 */
class AnnotationStub2
{
    /**
     * @var int
     *
     * @Solarium\Id("custom_id")
     */
    public $id = 1423;

    public $string2;
}
