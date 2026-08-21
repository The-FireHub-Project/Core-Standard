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

use FireHub\Core\Type\ValueObject;
use Stringable;

/**
 * ### Defines the base date Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for date-based Value Objects.
 *
 * It provides immutable calendar date value semantics while allowing concrete implementations to define
 * date-specific behavior in higher-level layers.
 *
 * The class keeps the Core layer focused on defining the fundamental date value contract, while concrete date
 * operations and developer-facing functionality belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of non-empty-string
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Date extends ValueObject implements Stringable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():string;

    /**
     * ### Returns the string representation of the value
     *
     * Provides the native PHP string representation of the Value Object.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\Temporal\Date::value() To get the string value.
     *
     * @return TValue The string representation of the value.
     */
    public function __toString ():string {

        return $this->value();

    }

}