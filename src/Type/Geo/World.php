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
 * ### Represents the world as a geographic value
 *
 * The World enum represents the complete geographic world as a single value within the FireHub Core type system.
 *
 * It provides a stable geographic reference for operations and relationships that apply to the entire Earth rather than
 * to a specific country, continent, landmass, or geographic region.
 * @since 1.0.0
 */
enum World:string implements M49 {

    /**
     * @since 1.0.0
     */
    case WORLD = 'World';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function code ():string {

        return match ($this) {
            self::WORLD => '001'
        };

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function parent ():?M49 {

        return null;

    }

}