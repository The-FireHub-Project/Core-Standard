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
 * ### Represents a major geographic region of the world
 *
 * The Region enum represents the major geographic regions of the world within the FireHub Core type system.
 *
 * It provides stable geographic references for grouping countries and other geographic entities into broad world
 * regions.
 * @since 1.0.0
 */
enum Region:string implements M49 {

    /**
     * @since 1.0.0
     */
    case AFRICA = 'Africa';

    /**
     * @since 1.0.0
     */
    case AMERICAS = 'Americas';

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
    case EUROPE = 'Europe';

    /**
     * @since 1.0.0
     */
    case OCEANIA = 'Oceania';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::AFRICA => '002',
            self::AMERICAS => '119',
            self::ANTARCTICA => '110',
            self::ASIA => '142',
            self::EUROPE => '150',
            self::OCEANIA => '009'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function parent ():M49 {

        return World::WORLD;

    }

}