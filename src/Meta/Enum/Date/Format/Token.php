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

namespace FireHub\Core\Meta\Enum\Date\Format;

/**
 * ### Defines a date and time format token
 *
 * The Token interface defines the common contract for enumerations representing native PHP date and time format
 * tokens.
 *
 * Implementations provide a specific format token used to represent a date or time component.
 * @since 1.0.0
 */
interface Token {

    /**
     * ### Returns the format token value
     * @since 1.0.0
     *
     * @return non-empty-string The format token value.
     */
    public function value ():string;

}