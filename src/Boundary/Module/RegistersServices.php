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

use FireHub\Core\Boundary\Container\Registrar;

/**
 * ### Defines module service registration
 *
 * Allows an application module to contribute service registrations to the application's dependency injection container.
 *
 * Service registration occurs during application composition, before module initialization and container freezing.
 * @since 1.0.0
 */
interface RegistersServices {

    /**
     * ### Registers module services
     *
     * Configures the dependency injection services provided by the module.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\Container\Registrar $registrar <p>
     * Service registration boundary.
     * </p>
     *
     * @return void
     */
    public function register (Registrar $registrar):void;

}