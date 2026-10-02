<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Conversion;

/**
 * ### Defines conversion to a JSON representation
 *
 * JSON conversion provides the ability to represent the value of an object as a JSON-encoded string.
 *
 * The capability defines the fundamental operation for producing a JSON representation without prescribing how
 * values are stored, organized, encoded, or represented internally.
 * @since 1.0.0
 */
interface Jsonable {

    /**
     * ### Returns the JSON representation
     *
     * Returns the value represented as a JSON-encoded string.
     * @since 1.0.0
     *
     * @return string The JSON representation.
     */
    public function toJson ():string;

}