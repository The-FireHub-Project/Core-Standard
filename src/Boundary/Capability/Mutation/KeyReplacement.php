<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Mutation;

use FireHub\Core\Meta\Enum\MutationOutcome;

/**
 * ### Defines key-based replacement of values
 *
 * Key replacement provides the ability to replace an existing value identified by its key without changing the
 * keyed structure in which the value is stored.
 *
 * The capability does not permit creation or removal of keyed values. Implementations preserve their existing set
 * of keys and report NOT_FOUND when the specified key does not exist.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface KeyReplacement {

    /**
     * ### Replaces the value associated with the specified key
     *
     * Replaces the existing value associated with the specified key without creating a new key or otherwise
     * changing the keyed structure.
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * The key whose associated value should be replaced.
     * </p>
     * @param TValue $value <p>
     * The replacement value.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the replacement: UPDATED if the value was
     * replaced, or NOT_FOUND if the key does not exist.
     */
    public function replace (mixed $key, mixed $value):MutationOutcome;

}