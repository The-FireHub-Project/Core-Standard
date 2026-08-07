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
 * ### Defines the base character Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all character-based Value Objects.
 *
 * It provides immutable character value semantics while ensuring that implementations represent a single valid
 * character within a specific encoding.
 *
 * The class keeps the Core layer focused on defining the character value contract, while concrete implementations
 * belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of non-empty-string
 *
 * @extends \FireHub\Core\Type\StringValue<TValue>
 */
abstract readonly class Char extends StringValue {}