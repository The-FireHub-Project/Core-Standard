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

namespace FireHub\Core\Boundary\Capability\Transformation;

/**
 * ### Defines merging capability
 *
 * Defines the capability for producing a new instance containing the key-value associations of the current
 * structure merged with the key-value associations provided by another iterable source.
 *
 * When the provided source contains a key that already exists within the current structure, the value from the
 * provided source replaces the existing value.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface Mergeable {

    /**
     * ### Merges key-value associations
     *
     * Creates a new instance containing the key-value associations of the current structure together with the
     * associations provided by the specified iterable source.
     *
     * Existing associations whose keys are also present in the provided source are replaced by the corresponding
     * values from that source.
     * @since 1.0.0
     *
     * @param iterable<TKey, TValue> $values <p>
     * The key-value associations to merge.
     * </p>
     *
     * @return static A new instance containing the merged key-value associations.
     */
    public function merge (iterable $values):static;

}