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

namespace FireHub\Core\Meta\Enum;

/**
 * ### Represents the outcome of a mutation operation
 *
 * MutationOutcome describes the result of an operation that attempts to create, update, or remove an entry.
 * @since 1.0.0
 */
enum MutationOutcome {

    /**
     * ### New Entry Created
     * @since 1.0.0
     */
    case CREATED;

    /**
     * ### Existing Entry Updated
     * @since 1.0.0
     */
    case UPDATED;

    /**
     * ### Entry Removed
     * @since 1.0.0
     */
    case REMOVED;

    /**
     * ### Entry Not Found
     * @since 1.0.0
     */
    case NOT_FOUND;

}