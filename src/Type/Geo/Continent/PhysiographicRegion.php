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
 * ### Defines the major physiographic regions of the world
 *
 * The PhysiographicRegion enum represents major physical geographic regions used to classify continents according to
 * their shared physical and geographic characteristics within the FireHub Core geographic type system.
 *
 * It provides a strongly typed representation of physiographic regional groupings independently of political,
 * cultural, or administrative boundaries.
 * @since 1.0.0
 */
enum PhysiographicRegion:string {

    /**
     * @since 1.0.0
     */
    case AFRICA = 'Africa';

    /**
     * @since 1.0.0
     */
    case AMERICA = 'America';

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

}