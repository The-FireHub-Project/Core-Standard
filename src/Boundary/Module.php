<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core
 */

namespace FireHub\Core\Boundary;

/**
 * ### Defines an application composition module
 *
 * Represents a cohesive functional unit that participates in application
 * composition without owning an independent runtime lifecycle.
 *
 * The module's fully qualified class name serves as its unique identifier.
 * @since 1.0.0
 */
interface Module {

    /**
     * ### Gets the module identifier
     *
     * Returns a stable identifier used to register and reference the module.
     * @since 1.0.0
     *
     * @return class-string<\FireHub\Core\Boundary\Module> Module identifier.
     */
    public function id ():string;

}