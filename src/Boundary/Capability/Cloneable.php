<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability;

/**
 * ### Defines the ability to create an independent deep copy
 *
 * Cloneable defines a contract for objects that can create an independent deep copy of themselves. The returned
 * copy must not share a mutable object state with the original object.
 *
 * Implementations are responsible for recursively copying mutable objects contained within their state to preserve
 * the independence of the returned copy.
 * @since 1.0.0
 */
interface Cloneable {

    /**
     * ### Creates an independent deep copy of the object
     * @since 1.0.0
     *
     * @return static An independent deep copy of the object.
     */
    public function copy ():static;

}