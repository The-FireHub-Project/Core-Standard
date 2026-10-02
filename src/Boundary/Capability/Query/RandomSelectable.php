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

namespace FireHub\Core\Boundary\Capability\Query;

use FireHub\Core\Type\Maybe;

/**
 * ### Defines random selection of values
 *
 * Random selection provides the ability to select one or more values from a data structure without modifying its
 * contents.
 *
 * Implementations determine how randomness is produced and how values participate in selection according to the
 * semantics of the implementing data structure.
 * @since 1.0.0
 *
 * @template TValue
 */
interface RandomSelectable {

    /**
     * ### Selects a random value
     *
     * Selects and returns one randomly chosen value from the data structure without modifying its contents.
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Maybe<TValue|mixed> The selected value, or none if no value can be selected.
     */
    public function random ():Maybe;

    /**
     * ### Selects a random sample
     *
     * Selects up to the specified number of randomly chosen values from the data structure without modifying its
     * contents.
     *
     * Values are selected without replacement, so the same selectable element is not selected more than once.
     * @since 1.0.0
     *
     * @param non-negative-int $size <p>
     * The maximum number of values to select.
     * </p>
     *
     * @return static A structure containing the randomly selected values.
     */
    public function sample (int $size):static;

}