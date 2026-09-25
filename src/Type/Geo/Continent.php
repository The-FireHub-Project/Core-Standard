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

namespace FireHub\Core\Type\Geo;

use FireHub\Core\Type\Geo\Continent\ {
    Geological, Landmass, PhysiographicRegion
};

/**
 * ### Defines the world's continents
 *
 * The Continent enum represents the recognized continents of the world within the FireHub Core geographic type
 * system.
 *
 * It provides a strongly typed representation of continental geographic regions without coupling the Core layer
 * to external geographic codes, databases, or runtime-specific implementations.
 * @since 1.0.0
 */
enum Continent:string {

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
    case ASIA = 'Asia';

    /**
     * @since 1.0.0
     */
    case AUSTRALIA = 'Australia';

    /**
     * @since 1.0.0
     */
    case EUROPE = 'Europe';

    /**
     * @since 1.0.0
     */
    case NORTH_AMERICA = 'North America';

    /**
     * @since 1.0.0
     */
    case SOUTH_AMERICA = 'South America';

    /**
     * ## Gets a continent as a geological continent
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Geo\Continent\Geological Geological continent.
     */
    public function geological ():Geological {

        return match ($this) {
            self::AFRICA => Geological::AFRICA,
            self::ANTARCTICA => Geological::ANTARCTICA,
            self::ASIA, self::EUROPE => Geological::EURASIA,
            self::AUSTRALIA => Geological::AUSTRALIA,
            self::NORTH_AMERICA => Geological::NORTH_AMERICA,
            self::SOUTH_AMERICA => Geological::SOUTH_AMERICA
        };

    }

    /**
     * ## Gets a continent as a physiographic region
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Geo\Continent\PhysiographicRegion Physiographic region.
     */
    public function physiographicRegion ():PhysiographicRegion {

        return match ($this) {
            self::AFRICA => PhysiographicRegion::AFRICA,
            self::ANTARCTICA => PhysiographicRegion::ANTARCTICA,
            self::ASIA, self::EUROPE => PhysiographicRegion::EURASIA,
            self::AUSTRALIA => PhysiographicRegion::AUSTRALIA,
            self::NORTH_AMERICA, self::SOUTH_AMERICA => PhysiographicRegion::AMERICA
        };

    }

    /**
     * ## Gets a continent as a landmass
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Geo\Continent\Landmass Landmass.
     */
    public function landmass ():Landmass {

        return match ($this) {
            self::AFRICA, self::ASIA, self::EUROPE => Landmass::AFRO_EURASIA,
            self::ANTARCTICA => Landmass::ANTARCTICA,
            self::AUSTRALIA => Landmass::AUSTRALIA,
            self::NORTH_AMERICA, self::SOUTH_AMERICA => Landmass::AMERICA
        };

    }

}