<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.2
 * @package Core
 */

namespace FireHub\Core\Type;

/**
 * ### Represents an optional value
 *
 * Maybe represents a value that may or may not exist. A Maybe instance is either a Some value containing a value
 * or a None value representing the absence of a value.
 *
 * Maybe distinguishes between an existing value and the absence of a value without using `null` as an implicit
 * absence marker.
 * @since 1.0.0
 *
 * @template TValue
 */
abstract readonly class Maybe {

    /**
     * ### Determines whether a value exists
     * @since 1.0.0
     *
     * @return bool True if a value exists, false otherwise.
     */
    abstract public function isSome ():bool;

    /**
     * ### Determines whether a value does not exist
     * @since 1.0.0
     *
     * @return bool True if a value does not exist, false otherwise.
     */
    abstract public function isNone ():bool;

}