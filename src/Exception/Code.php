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

namespace FireHub\Core\Exception;

use FireHub\Core\Type\ValueObject;
use FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodeValueException;

/**
 * ### Error code value object
 * @since 1.0.0
 *
 * @template TValue of int
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
final readonly class Code extends ValueObject {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\ValueObject::guard() As a guard.
     *
     * @param TValue $value <p>
     * The error code.
     * </p>
     *
     * @throws \FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodeValueException If the condition is not met.
     * @throws \FireHub\Core\Exception\FireHubException If the condition is not met.
     * @throws \FireHub\Core\Type\Exception\ValueObjectException If the exception is not a FireHubException.
     *
     * @return void
     */
    public function __construct (
        private int $value
    ) {

        $this->guard(
            fn() => $value >= 0,
            fn() => new InvalidCodeValueException('Value must be positive.')
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():int {

        return $this->value;

    }

}