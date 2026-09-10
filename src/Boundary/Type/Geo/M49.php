<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Type\Geo;

/**
 * ### Defines the United Nations M49 geographic classification contract
 *
 * The M49 interface defines the common contract for geographic entities classified according to the United Nations
 * M49 standard.
 *
 * It provides a consistent interface for accessing M49 geographic codes and hierarchical relationships between
 * regions, subregions, intermediate regions, and countries.
 * @since 1.0.0
 */
interface M49 {

    /**
     * ### Three-digit country code
     *
     * Three-digit country codes that are identical to those developed and maintained by the United Nations
     * Statistics Division, with the advantage of script (writing system) independence, and hence useful for people
     * or systems using non-Latin scripts.
     * @since 1.0.0
     *
     * @return numeric-string Three-digit country code.
     */
    public function code ():string;

    /**
     * ### Get parent region
     * @since 1.0.0
     *
     * @return null|self Parent region or null if the entity is a country.
     */
    public function parent ():?self;

}