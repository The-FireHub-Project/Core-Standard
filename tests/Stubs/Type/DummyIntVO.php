<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.2
 * @package Core\Tests
 */

namespace FireHub\Tests\Core\Stubs\Type;

use FireHub\Core\Type\ValueObject;
use FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodeValueException;

/**
 * ### Dummy int Value Object
 * @since 1.0.0
 */
readonly class DummyIntVO extends ValueObject {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param int $value
     *
     * @throws \FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodeValueException
     * @throws \FireHub\Core\Exception\FireHubException
     * @throws \FireHub\Core\Type\Exception\ValueObjectException
     *
     * @return void
     */
    public function __construct (
        private int $value = 1
    ) {

        $this->guard(
            fn() => $this->value > 0,
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