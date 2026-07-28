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
 * ### Defines the base string Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all string-based Value Objects.
 *
 * It provides immutable string value semantics while allowing concrete implementations to extend the type with
 * high-level string operations and domain-specific behavior.
 *
 * The class keeps the Core layer focused on defining the string value contract, while concrete implementations
 * belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of string
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Str extends ValueObject {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():string;

}