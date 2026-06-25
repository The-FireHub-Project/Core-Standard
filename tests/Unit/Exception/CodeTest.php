<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core\Tests
 */

namespace FireHub\Tests\Core\Unit\Exception;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Exception\Code;
use FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodeValueException;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};

/**
 * ### Test Error code value object
 * @since 1.0.0
 */
#[Small]
#[Group('exception')]
#[CoversClass(Code::class)]
final class CodeTest extends FireHubTestCase {

    /**
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
    #[TestWith([10])]
    #[TestWith([0])]
    public function testValue (int $value):void {

        $code = new Code($value);

        self::assertSame($value, $code->value());

    }

    /**
     * @since 1.0.0
     *
     * @param int $value
     *
     * @throws \FireHub\Core\Exception\FireHubException
     * @throws \FireHub\Core\Type\Exception\ValueObjectException
     *
     * @return void
     */
    #[TestWith([-1])]
    public function testCreateWithInvalidValue (int $value):void {

        $this->expectException(InvalidCodeValueException::class);

        new Code($value);

    }

}