<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Type;

use IteratorAggregate, Traversable;

/**
 * ### Represents a type whose values can be enumerated sequentially
 *
 * An enumerable type provides a contract for exposing its values through a defined iteration mechanism. It allows
 * consumers to traverse the available values without depending on the underlying representation or storage mechanism.
 *
 * The contract does not prescribe how values are stored, how iteration is implemented, or whether the underlying
 * data is finite, lazy, or materialized. These characteristics are defined by the implementing type.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends IteratorAggregate<TKey, TValue>
 */
interface Enumerable extends IteratorAggregate {

    /**
     * ### Returns an iterator for traversing the values
     * @since 1.0.0
     *
     * @return Traversable<TKey, TValue>
     */
    public function getIterator ():Traversable;

}