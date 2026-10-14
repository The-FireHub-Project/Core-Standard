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
 * ### Defines dependency injection container capabilities
 *
 * Provides access to registered service objects without exposing their registration, construction, or lifetime
 * management.
 * @since 1.0.0
 */
interface Container {

    /**
     * ### Gets a registered service
     *
     * Returns the service instance associated with the specified identifier. The instance may be created during
     * resolution according to its configured lifetime.
     * @since 1.0.0
     *
     * @template TService of object
     *
     * @param class-string<TService> $id <p>
     * Service identifier.
     * </p>
     *
     * @return TService Resolved service instance.
     */
    public function get (string $id):object;

    /**
     * ### Checks whether a service is registered
     *
     * Determines whether a service definition exists for the specified identifier without resolving the service.
     * @since 1.0.0
     *
     * @param class-string $id <p>
     * Service identifier.
     * </p>
     *
     * @return bool True if the service is registered.
     */
    public function has (string $id):bool;

}