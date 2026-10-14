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

namespace FireHub\Core\Type;

/**
 * ### Defines the base identifier Value Object
 *
 * Represents an immutable identifier used to distinguish or reference components, resources, and other identifiable
 * elements within the FireHub ecosystem.
 *
 * The identifier abstraction does not prescribe a specific value representation or identification strategy. Concrete
 * implementations define their underlying value type, validation rules, and domain-specific constraints.
 *
 * Identifiers are compared using their concrete type and underlying value.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Identifier extends ValueObject {}