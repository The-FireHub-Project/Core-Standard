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

use FireHub\Core\Boundary\Type\Geo\M49;

/**
 * ### Represents a geographic subregion of the world
 *
 * The SubRegion enum represents the geographic subregions of the world within the FireHub Core type system.
 *
 * It provides stable geographic references for grouping countries into more specific regions within a broader
 * geographic region.
 * @since 1.0.0
 */
enum SubRegion:string implements M49 {

    /**
     * @since 1.0.0
     */
    case AUSTRALIA_AND_NEW_ZEALAND = 'Australia and New Zealand';

    /**
     * @since 1.0.0
     */
    case CENTRAL_ASIA = 'Central Asia';

    /**
     * @since 1.0.0
     */
    case EASTERN_ASIA = 'Eastern Asia';

    /**
     * @since 1.0.0
     */
    case EASTERN_EUROPE = 'Eastern Europe';

    /**
     * @since 1.0.0
     */
    case LATIN_AMERICA_AND_THE_CARIBBEAN = 'Latin America and the Caribbean';

    /**
     * @since 1.0.0
     */
    case MELANESIA = 'Melanesia';

    /**
     * @since 1.0.0
     */
    case MICRONESIA = 'Micronesia';

    /**
     * @since 1.0.0
     */
    case NORTHERN_AFRICA = 'Northern Africa';

    /**
     * @since 1.0.0
     */
    case NORTHERN_AMERICA = 'Northern America';

    /**
     * @since 1.0.0
     */
    case NORTHERN_EUROPE = 'Northern Europe';

    /**
     * @since 1.0.0
     */
    case POLYNESIA = 'Polynesia';

    /**
     * @since 1.0.0
     */
    case SOUTH_EASTERN_ASIA = 'South-Eastern Asia';

    /**
     * @since 1.0.0
     */
    case SOUTHERN_ASIA = 'Southern Asia';

    /**
     * @since 1.0.0
     */
    case SOUTHERN_EUROPE = 'Southern Europe';

    /**
     * @since 1.0.0
     */
    case SUB_SAHARAN_AFRICA = 'Sub-Saharan Africa';

    /**
     * @since 1.0.0
     */
    case WESTERN_ASIA = 'Western Asia';

    /**
     * @since 1.0.0
     */
    case WESTERN_EUROPE = 'Western Europe';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::AUSTRALIA_AND_NEW_ZEALAND => '053',
            self::CENTRAL_ASIA => '143',
            self::EASTERN_ASIA => '030',
            self::EASTERN_EUROPE => '051',
            self::LATIN_AMERICA_AND_THE_CARIBBEAN => '419',
            self::MELANESIA => '054',
            self::MICRONESIA => '057',
            self::NORTHERN_AFRICA => '015',
            self::NORTHERN_AMERICA => '021',
            self::NORTHERN_EUROPE => '154',
            self::POLYNESIA => '061',
            self::SOUTH_EASTERN_ASIA => '035',
            self::SOUTHERN_ASIA => '034',
            self::SOUTHERN_EUROPE => '039',
            self::SUB_SAHARAN_AFRICA => '202',
            self::WESTERN_ASIA => '145',
            self::WESTERN_EUROPE => '155'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function parent ():M49 {

        return match ($this) {
            self::AUSTRALIA_AND_NEW_ZEALAND, self::MELANESIA, self::MICRONESIA, self::POLYNESIA
                => Region::OCEANIA,
            self::CENTRAL_ASIA, self::EASTERN_ASIA, self::SOUTH_EASTERN_ASIA, self::SOUTHERN_ASIA, self::WESTERN_ASIA
                => Region::ASIA,
            self::EASTERN_EUROPE, self::NORTHERN_EUROPE, self::SOUTHERN_EUROPE, self::WESTERN_EUROPE
                => Region::EUROPE,
            self::LATIN_AMERICA_AND_THE_CARIBBEAN, self::NORTHERN_AMERICA
                => Region::AMERICAS,
            self::NORTHERN_AFRICA, self::SUB_SAHARAN_AFRICA
                => Region::AFRICA
        };

    }

}