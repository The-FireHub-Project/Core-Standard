<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Access;

/**
 * ### Defines multiplicity-based value access
 *
 * Multiplicity access provides the ability to determine whether a specific value is present within an object and
 * retrieve the number of times that value occurs.
 *
 * The capability extends value-based access with occurrence counting without prescribing how values are stored,
 * compared, indexed, or located internally.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Capability\Access\ValueAccess<TValue>
 */
interface MultiplicityAccess extends ValueAccess {

    /**
     * ### Gets the number of occurrences of a value
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value whose occurrences should be counted.
     * </p>
     *
     * @return non-negative-int The number of occurrences of the specified value.
     */
    public function frequency (mixed $value):int;

}