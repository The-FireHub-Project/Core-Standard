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
 * ### Provides an immutable integer value object with a high-level developer API
 *
 * The Integer class represents an integer value within the FireHub Foundation layer.
 *
 * It provides an expressive and object-oriented interface for working with integer values while preserving immutable
 * value semantics inherited from the Core Value Object system.
 *
 * The class implements the Core numeric type contract and extends the base Number Value Object abstraction, allowing
 * integer values to be used consistently across the FireHub ecosystem.
 *
 * This class is responsible for high-level integer operations and developer experience, while low-level numeric
 * execution remains delegated to the Runtime layer.
 * @since 1.0.0
 *
 * @template TValue of int
 *
 * @extends \FireHub\Core\Type\Number<TValue>
 */
abstract readonly class Integer extends Number {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():int;

}