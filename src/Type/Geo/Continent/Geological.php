<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Runtime
 */

namespace FireHub\Core\Type\Geo\Continent;

/**
 * ### Defines the geological continental divisions of the world
 *
 * The Geological enum represents major geological divisions used to classify continents and their underlying
 * continental structures within the FireHub Core geographic type system.
 *
 * It provides a strongly typed representation of geological continental groupings independently of political,
 * cultural, or administrative boundaries.
 * @since 1.0.0
 */
enum Geological:string {

    /**
     * @since 1.0.0
     */
    case AFRICA = 'Africa';

    /**
     * @since 1.0.0
     */
    case ANTARCTICA = 'Antarctica';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA = 'Australia';

    /**
     * @since 1.0.0
     */
    case EURASIA = 'Eurasia';

    /**
     * @since 1.0.0
     */
    case NORTH_AMERICA = 'North America';

    /**
     * @since 1.0.0
     */
    case SOUTH_AMERICA = 'South America';

}