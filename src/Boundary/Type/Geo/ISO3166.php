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
 * ### The International Standard for country codes and codes for their subdivisions
 *
 * ISO 3166 is a standard published by the International Organization for Standardization (ISO) that defines codes
 * for the names of countries, dependent territories, special areas of geographical interest,
 * and their principal subdivisions (for example, provinces or states).
 * @since 1.0.0
 */
interface ISO3166 {

    /**
     * ### Alpha 2 code
     *
     * ISO 3166-1 alpha-2 codes are two-letter country codes defined in ISO 3166-1, part of the ISO 3166 standard[1]
     * published by the International Organization for Standardization (ISO), to represent countries,
     * dependent territories, and special areas of geographical interest.
     * @since 1.0.0
     *
     * @return non-empty-string Alpha 2 code.
     */
    public function alpha2 ():string;

    /**
     * ### Alpha 3 code
     *
     * ISO 3166-1 alpha-3 codes are three-letter country codes defined in ISO 3166-1, part of the ISO 3166 standard
     * published by the International Organization for Standardization (ISO), to represent countries,
     * dependent territories, and special areas of geographical interest.
     * @since 1.0.0
     *
     * @return non-empty-string Alpha 3 code.
     */
    public function alpha3 ():string;

}