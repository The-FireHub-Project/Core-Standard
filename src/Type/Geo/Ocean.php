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

/**
 * ### Represents an ocean as a geographic value
 *
 * The Ocean enum represents the world's major oceans as geographic values within the FireHub Core type system.
 *
 * It provides stable geographic references for relationships and classifications involving the world's oceans.
 * @since 1.0.0
 */
enum Ocean:string {

    /**
     * @since 1.0.0
     */
    case ARCTIC = 'Arctic';

    /**
     * @since 1.0.0
     */
    case ATLANTIC = 'Atlantic';

    /**
     * @since 1.0.0
     */
    case INDIAN = 'Indian';

    /**
     * @since 1.0.0
     */
    case PACIFIC = 'Pacific';

    /**
     * @since 1.0.0
     */
    case SOUTHERN = 'Southern';

}