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
 * ### Defines indexed replacement of values
 *
 * Indexed replacement provides the ability to replace an existing value identified by an integer index without
 * changing the structure in which the value is stored.
 *
 * The capability does not permit creation or removal of indexed values. Implementations preserve their existing
 * indexed structure and report NOT_FOUND when the specified index does not exist.
 * @since 1.0.0
 *
 * @template TValue
 */
interface IndexReplacement {

    /**
     * ### Replaces the value at the specified index
     *
     * Replaces the existing value associated with the specified index without creating a new index or otherwise
     * changing the indexed structure.
     * @since 1.0.0
     *
     * @param int $index <p>
     * The index whose value should be replaced.
     * </p>
     * @param TValue $value <p>
     * The replacement value.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the replacement: UPDATED if the value was
     * replaced, or NOT_FOUND if the index does not exist.
     */
    public function replace (int $index, mixed $value):MutationOutcome;

}