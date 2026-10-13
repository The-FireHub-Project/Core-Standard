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
 * ### Defines a contract for objects that can transition into a frozen state
 *
 * A freezable object is initially mutable and may transition into a frozen state using {@see self::freeze()}.
 *
 * Once frozen, operations that would modify the object's state must no longer be permitted.
 *
 * Freezing is a one-way state transition. Implementations must not restore mutability to the same instance after it
 * has been frozen.
 * @since 1.0.0
 */
interface Freezable {

    /**
     * ### Determines whether this instance is frozen
     * @since 1.0.0
     *
     * @return bool True if this instance is frozen, false otherwise.
     */
    public function isFrozen ():bool;

    /**
     * ### Freezes this instance
     *
     * After this operation completes, any operation that would modify the state of this instance must be rejected.
     *
     * Calling this method on an already frozen instance must have no additional effect.
     * @since 1.0.0
     *
     * @return $this This instance.
     */
    public function freeze ():static;

}