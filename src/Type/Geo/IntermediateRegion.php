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
 * ### Represents an intermediate geographic region of the world
 *
 * The IntermediateRegion enum represents intermediate geographic regions within the FireHub Core type system.
 *
 * It provides stable geographic references for grouping countries into more specific geographic areas within a
 * broader subregion.
 * @since 1.0.0
 */
enum IntermediateRegion:string implements M49 {

    /**
     * @since 1.0.0
     */
    case CARIBBEAN = 'Caribbean';

    /**
     * @since 1.0.0
     */
    case CENTRAL_AMERICA = 'Central America';

    /**
     * @since 1.0.0
     */
    case EASTERN_AFRICA = 'Eastern Africa';

    /**
     * @since 1.0.0
     */
    case MIDDLE_AFRICA = 'Middle Africa';

    /**
     * @since 1.0.0
     */
    case SOUTH_AMERICA = 'South America';

    /**
     * @since 1.0.0
     */
    case SOUTHERN_AFRICA = 'Southern Africa';

    /**
     * @since 1.0.0
     */
    case WESTERN_AFRICA = 'Western Africa';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::CARIBBEAN => '029',
            self::CENTRAL_AMERICA => '013',
            self::EASTERN_AFRICA => '014',
            self::MIDDLE_AFRICA => '017',
            self::SOUTH_AMERICA => '005',
            self::SOUTHERN_AFRICA => '018',
            self::WESTERN_AFRICA => '011'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function parent ():M49 {

        return match ($this) {
            self::CARIBBEAN, self::CENTRAL_AMERICA, self::SOUTH_AMERICA
                => SubRegion::LATIN_AMERICA_AND_THE_CARIBBEAN,
            self::EASTERN_AFRICA, self::MIDDLE_AFRICA, self::SOUTHERN_AFRICA, self::WESTERN_AFRICA
                => SubRegion::SUB_SAHARAN_AFRICA
        };

    }

}