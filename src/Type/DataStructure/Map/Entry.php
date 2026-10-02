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

namespace FireHub\Core\Type\DataStructure\Map;

use FireHub\Core\Type\ValueObject;

/**
 * ### Map entry
 *
 * Represents an immutable key-value entry belonging to a map.
 *
 * A map entry groups a key together with its associated value and represents that association as a single value
 * object. It provides a strongly typed representation of an individual map entry when the key and value need to be
 * passed, returned, or otherwise handled together.
 *
 * The entry does not provide map storage or lookup behavior and does not maintain any relationship with the map from
 * which it originated. It represents only the key-value association itself.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends ValueObject<array{key: TKey, value: TValue}>
 */
final readonly class Entry extends ValueObject {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * The entry key.
     * </p>
     * @param TValue $value <p>
     * The entry value.
     * </p>
     *
     * @return void
     */
    public function __construct (
        public mixed $key,
        public mixed $value
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():array {

        return [
            'key' => $this->key,
            'value' => $this->value
        ];

    }

}