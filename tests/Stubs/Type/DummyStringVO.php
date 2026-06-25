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
 * ### Dummy string Value Object
 * @since 1.0.0
 */
readonly class DummyStringVO extends ValueObject {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param string $value
     *
     * @return void
     */
    public function __construct (
        private string $value = 'default'
    ) {

        $this->guard(
            fn() => $this->value !== '',
            fn() => new InvalidCodeValueException('Value cannot be empty.')
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}