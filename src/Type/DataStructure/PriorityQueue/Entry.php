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

namespace FireHub\Core\Type\DataStructure\PriorityQueue;

use FireHub\Core\Type\ValueObject;

/**
 * ### Priority queue entry
 *
 * Represents an immutable priority-value entry belonging to a priority queue.
 *
 * A priority queue entry groups a priority together with its associated value and represents that association as a
 * single value object. It provides a strongly typed representation of an individual priority queue entry when the
 * priority and value need to be passed, returned, or otherwise handled together.
 *
 * The entry does not provide priority queue storage or ordering behavior and does not maintain any relationship with
 * the priority queue from which it originated. It represents only the priority-value association itself.
 * @since 1.0.0
 *
 * @template TPriority
 * @template TValue
 *
 * @extends ValueObject<array{priority: TPriority, value: TValue}>
 */
final readonly class Entry extends ValueObject {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param TPriority $priority <p>
     * The entry priority.
     * </p>
     * @param TValue $value <p>
     * The entry value.
     * </p>
     *
     * @return void
     */
    public function __construct (
        public mixed $priority,
        public mixed $value
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():array {

        return [
            'priority' => $this->priority,
            'value' => $this->value
        ];

    }

}