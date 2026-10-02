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
 * ### Defines the major landmasses of the world
 *
 * The Landmass enum represents major continuous land areas used to classify continents according to their physical
 * connection to other continental land areas within the FireHub Core geographic type system.
 *
 * It provides a strongly typed representation of landmass groupings independently of political, cultural, or
 * administrative boundaries.
 * @since 1.0.0
 */
enum Landmass :string {

    /**
     * @since 1.0.0
     */
    case AFRO_EURASIA = 'Afro-Eurasia';

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

}