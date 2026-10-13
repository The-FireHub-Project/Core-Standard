<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Access;

/**
 * ### Defines access to boundary values
 *
 * Boundary access provides read-only access to the first and last values of an ordered sequence.
 *
 * The capability defines the fundamental operations for retrieving values at the boundaries without prescribing
 * how values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Capability\Access\FrontAccess<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\BackAccess<TValue>
 */
interface BoundaryAccess extends FrontAccess, BackAccess {}