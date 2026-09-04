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

namespace FireHub\Core\Type\Temporal;

use FireHub\Core\Type\ValueObject;

/**
 * ### Defines the base temporal Interval Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all temporal Interval Value Objects.
 *
 * It provides immutable interval value semantics while allowing concrete implementations to define specific behavior
 * for representing and working with recurring temporal occurrences within a bounded period.
 *
 * The class keeps the Core layer focused on defining the temporal interval value contract, while concrete implementations
 * belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of array<array-key, mixed>
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Interval extends ValueObject {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():array;

}