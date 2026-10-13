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

use FireHub\Core\Type\Maybe;

/**
 * ### Defines key-based access to values
 *
 * Key access provides read-only access to values identified by their keys.
 *
 * The capability defines the fundamental operations for determining whether a key exists and retrieving the value
 * associated with it, without prescribing how values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface KeyAccess {

    /**
     * ### Determines whether a key exists
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * The key to check.
     * </p>
     *
     * @return bool True if a value exists for the specified key, false otherwise.
     */
    public function has (mixed $key):bool;

    /**
     * ### Returns the value associated with the specified key
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * The key whose value should be returned.
     * </p>
     *
     * @return \FireHub\Core\Type\Maybe<TValue|mixed> The associated value, or an empty Maybe if the key does not exist.
     */
    public function get (mixed $key):Maybe;

}