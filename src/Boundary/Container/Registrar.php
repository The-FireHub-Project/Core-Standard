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

namespace FireHub\Core\Boundary\Container;

/**
 * ### Defines service registration capabilities
 *
 * Provides the ability to register service instances and associate service identifiers with their implementations
 * without prescribing how registrations are stored or resolved.
 * @since 1.0.0
 */
interface Registrar {

    /**
     * ### Registers an existing service instance
     *
     * Associates the specified service identifier with an existing object.
     * @since 1.0.0
     *
     * @template TService of object
     *
     * @param class-string<TService> $id <p>
     * Service identifier.
     * </p>
     * @param TService $instance <p>
     * Service instance.
     * </p>
     *
     * @return void
     */
    public function instance (string $id, object $instance):void;

}