<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core\Tests
 */

namespace FireHub\Tests\Core\Unit\Foundation\Constant\Numeric;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Foundation\Constant\Numeric\IntegerLimits;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};
use ReflectionClass, ReflectionException;

/**
 * ### Test integer boundaries and architecture-level constraints of the current PHP runtime
 * @since 1.0.0
 */
#[Small]
#[Group('foundation')]
#[CoversClass(IntegerLimits::class)]
final class IntegerLimitsTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param int $expected
     * @param int $actual
     *
     * @return void
     */
    #[TestWith([PHP_INT_MIN, IntegerLimits::MIN])]
    #[TestWith([PHP_INT_MAX, IntegerLimits::MAX])]
    #[TestWith([PHP_INT_SIZE, IntegerLimits::SIZE])]
    public function testValuesAreCorrect (int $expected, int $actual):void {

        self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(IntegerLimits::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}