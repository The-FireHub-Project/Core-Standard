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

use FireHub\Core\Boundary\Container\Scope;

/**
 * ### Defines dependency injection container capabilities
 *
 * Provides dependency resolution capabilities and manages the creation of isolated dependency resolution scopes.
 *
 * Singleton service instances are shared across scopes originating from the same container, while scoped service
 * instances remain isolated within their respective scopes.
 * @since 1.0.0
 */
interface Container extends Resolver {

    /**
     * ### Creates a dependency resolution scope
     *
     * Creates a new isolated resolution context with its own scoped service instances.
     *
     * The created scope shares singleton service instances with the originating container but maintains an
     * independent cache of scoped service instances.
     * @since 1.0.0
     *
     * @return \FireHub\Core\Boundary\Container\Scope Newly created dependency resolution scope.
     */
    public function createScope ():Scope;

}