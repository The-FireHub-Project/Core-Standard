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

namespace FireHub\Core\Type\Number;

use FireHub\Core\Type\Number;

/**
 * ### Defines an immutable real number value object within the FireHub ecosystem
 *
 * The Real class represents a real number value within the FireHub Core layer.
 *
 * It defines the contract for floating-point values while preserving immutable value semantics inherited from the Core
 * Value Object system.
 *
 * The class extends the base Number Value Object abstraction, allowing real number values to be represented
 * consistently across the FireHub ecosystem.
 *
 * This class is responsible for defining the real number type contract, while high-level operations and low-level
 * floating-point execution are delegated to higher-level and Runtime layers respectively.
 * @since 1.0.0
 *
 * @template TValue of float
 *
 * @extends \FireHub\Core\Type\Number<TValue>
 */
abstract readonly class Real extends Number {

    /**
     * ### Checks if the number is finite
     * @since 1.0.0
     *
     * @return bool Whether the number is finite.
     */
    abstract public function isFinite ():bool;

    /**
     * ### Checks if the number is infinite
     * @since 1.0.0
     *
     * @return bool Whether the number is infinite.
     */
    abstract public function isInfinite ():bool;

    /**
     * ### Checks if the number is NaN (Not a Number)
     * @since 1.0.0
     *
     * @return bool Whether the number is NaN.
     */
    abstract public function isNaN ():bool;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():float;

}