<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.2
 * @package Core
 */

namespace FireHub\Core\Type\Temporal;

use FireHub\Core\Type\Number;

/**
 * ### Defines an immutable timestamp value object contract
 *
 * The Timestamp class represents an immutable point in time measured relative to a defined epoch.
 *
 * It provides the fundamental contract for timestamp values across the FireHub ecosystem while leaving timestamp
 * representation, arithmetic, conversion, and execution details to the Foundation and Runtime layers.
 *
 * The class defines the core semantics of a timestamp without providing implementation-specific behavior.
 * @since 1.0.0
 *
 * @template TValue of numeric|numeric-string
 *
 * @extends \FireHub\Core\Type\Number<TValue>
 */
abstract readonly class Timestamp extends Number {}