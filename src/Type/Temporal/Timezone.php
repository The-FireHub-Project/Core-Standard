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
 * ### Represents a timezone value
 *
 * The Timezone value object represents either a named timezone identified by an IANA timezone identifier or a fixed
 * UTC offset.
 *
 * A named timezone is represented by predefined {@see Zone} value, while a fixed timezone is represented by its UTC
 * offset in seconds.
 * @since 1.0.0
 *
 * @template TValue of non-empty-string|\FireHub\Core\Type\Date\Zone::*
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Timezone extends ValueObject implements Stringable {

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
     * @uses \FireHub\Core\Type\Temporal\Timezone::value() To get the string value.
     *
     * @return TValue The string representation of the value.
     */
    public function __toString ():string {

        return $this->value();

    }

}