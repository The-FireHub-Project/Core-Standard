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

use FireHub\Core\Boundary\Resolver;

/**
 * ### Defines scoped dependency resolution capabilities
 *
 * Represents an isolated dependency resolution context that maintains its own scoped service instances while
 * sharing singleton instances with the originating container.
 *
 * Scoped service instances are reused within the same scope but remain isolated from other scopes.
 *
 * A scope must be closed when its associated execution context has completed.
 * @since 1.0.0
 */
interface Scope extends Resolver {

    /**
     * ### Closes the scope
     *
     * Ends the scope lifetime and releases references to its scoped service instances.
     *
     * Once closed, the scope must not allow further service resolution.
     * @since 1.0.0
     *
     * @return void
     */
    public function close ():void;

    /**
     * ### Checks whether the scope is closed
     *
     * Determines whether the scope has completed its lifetime.
     * @since 1.0.0
     *
     * @return bool True if the scope is closed.
     */
    public function isClosed ():bool;

}