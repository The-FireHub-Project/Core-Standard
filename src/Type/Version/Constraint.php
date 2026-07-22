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

namespace FireHub\Core\Type\Version;

/**
 * ### Version Constraint Operators
 *
 * Represents supported comparison operators used for defining version constraints.
 *
 * This enumeration provides a type-safe representation of version relationships used when comparing software
 * versions while preserving native version comparison semantics.
 * @since 1.0.0
 */
enum Constraint:string {

    /**
     * ### Version is less than another version
     * @since 1.0.0
     */
    case LESS = '<';

    /**
     * ### Version is less than or equal to another version
     * @since 1.0.0
     */
    case LESS_OR_EQUAL = '<=';

    /**
     * ### Version is equal to another version
     * @since 1.0.0
     */
    case EQUAL = '==';

    /**
     * ### Version is not equal to another version
     * @since 1.0.0
     */
    case NOT_EQUAL = '!=';

    /**
     * ### Version is greater than or equal to another version
     * @since 1.0.0
     */
    case GREATER_OR_EQUAL = '>=';

    /**
     * ### Version is greater than another version
     * @since 1.0.0
     */
    case GREATER = '>';

}