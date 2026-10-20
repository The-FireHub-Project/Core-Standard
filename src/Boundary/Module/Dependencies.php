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

namespace FireHub\Core\Boundary\Module;

/**
 * ### Defines module dependencies
 *
 * Allows an application module to declare other modules that must be available and initialized before the declaring
 * module.
 *
 * Dependencies are identified by their fully qualified class names. Modules without dependencies do not need to
 * implement this interface.
 * @since 1.0.0
 */
interface Dependencies {

    /**
     * ### Gets required module dependencies
     *
     * Returns the fully qualified class names of modules required by the implementing module.
     * @since 1.0.0
     *
     * @return list<class-string<\FireHub\Core\Boundary\Module>> Required module classes.
     */
    public function dependencies ():array;

}