<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Meta\Enum\Container;

/**
 * ### Defines dependency injection service lifetimes
 *
 * Determines how service instances are created and reused by a dependency injection container.
 * @since 1.0.0
 */
enum Lifetime {

    /**
     * ### Singleton lifetime
     *
     * Creates a service instance once and reuses it for later resolutions within the same container.
     * @since 1.0.0
     */
    case SINGLETON;

    /**
     * ### Scoped lifetime
     *
     * Creates a service instance once per active scope and reuses it for later resolutions within that scope.
     *
     * Different scopes maintain independent instances of the same service. Scoped instances are not shared across
     * scope boundaries.
     * @since 1.0.0
     */
    case SCOPED;

    /**
     * ### Transient lifetime
     *
     * Creates a new service instance for each resolution request.
     * @since 1.0.0
     */
    case TRANSIENT;

}