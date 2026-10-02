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
 * ### Defines a contract for objects that can produce a mutable instance
 *
 * A thawable object can create a new mutable instance derived from its current state without modifying the original
 * instance.
 *
 * The returned instance represents the same logical state at the time of thawing but may maintain its state
 * independently or share the underlying state when the implementation supports copy-on-write semantics.
 * @since 1.0.0
 */
interface Thawable {

    /**
     * ### Creates a mutable instance
     *
     * Creates a new mutable instance derived from the current instance without modifying the state of the current
     * instance.
     *
     * The returned instance must be mutable and distinct from the current instance.
     * @since 1.0.0
     *
     * @return static A new mutable instance.
     */
    public function thaw ():static;

}