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
 * ### Defines the base boolean Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all boolean-based Value Objects.
 *
 * It provides immutable boolean value semantics while allowing concrete implementations to extend the type with
 * domain-specific behavior.
 *
 * The class keeps the Core layer focused on defining the boolean value contract, while concrete implementations
 * belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of bool
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Boolean extends ValueObject {

    /**
     * ### Checks if the value is true
     * @since 1.0.0
     *
     * @return bool Returns true if the value is true, false otherwise.
     */
    abstract public function isTrue ():bool;

    /**
     * ### Checks if the value is false
     * @since 1.0.0
     *
     * @return bool Returns true if the value is false, false otherwise.
     */
    abstract public function isFalse ():bool;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():bool;

}