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

namespace FireHub\Core\Boundary\Capability\Query;

/**
 * ### Defines value searching
 *
 * Provides the ability to search for a value and return a result identifying the matching value or its location
 * within a data structure.
 *
 * The capability does not prescribe how values are searched, compared, stored, or represented, nor does it
 * prescribe the representation of a successful search result.
 * @since 1.0.0
 *
 * @template TValue
 * @template TResult
 */
interface Searchable {

    /**
     * ### Searches for a value
     *
     * Searches for the specified value and returns the corresponding search result when a match exists.
     * @since 1.0.0
     *
     * @param TValue $value Value to search for.
     *
     * @return null|TResult Search result if the value was found, null otherwise.
     */
    public function search (mixed $value):mixed;

}