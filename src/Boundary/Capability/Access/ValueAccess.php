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

namespace FireHub\Core\Boundary\Capability\Access;

/**
 * ### Defines value-based access
 *
 * Value access provides the ability to determine whether a specific value is present within an object.
 *
 * The capability defines the fundamental operation for value membership without prescribing how values are stored,
 * compared, indexed, or located internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface ValueAccess {

    /**
     * ### Checks whether a value exists
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value to check.
     * </p>
     *
     * @return bool True if the value exists, false otherwise.
     */
    public function contains (mixed $value):bool;

}