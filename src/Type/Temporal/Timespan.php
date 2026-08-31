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
use Stringable;

/**
 * ### Defines the base temporal Timespan Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all temporal Timespan Value Objects.
 *
 * It provides immutable timespan value semantics while allowing concrete implementations to define specific behavior
 * for representing and working with elapsed amounts of time.
 *
 * The class keeps the Core layer focused on defining the temporal timespan value contract, while concrete
 * implementations belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of numeric-string
 *
 * @extends \FireHub\Core\Type\Number<TValue>
 */
abstract readonly class Timespan extends Number implements Stringable {

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
     * @uses \FireHub\Core\Type\Temporal\Timespan::value() To get the string value.
     *
     * @return TValue The string representation of the value.
     */
    public function __toString ():string {

        return $this->value();

    }

}