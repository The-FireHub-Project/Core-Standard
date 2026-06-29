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
use FireHub\Core\Foundation\Constant\Numeric\FloatLimits;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};
use ReflectionClass, ReflectionException;

/**
 * ### Test floating-point limits and IEEE-754 behavior constants for the current PHP runtime environment
 * @since 1.0.0
 */
#[Small]
#[Group('foundation')]
#[CoversClass(FloatLimits::class)]
final class FloatLimitsTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param float $expected
     * @param float $actual
     *
     * @return void
     */
    #[TestWith([INF, FloatLimits::INF])]
    #[TestWith([NAN, FloatLimits::NAN])]
    #[TestWith([PHP_FLOAT_DIG, FloatLimits::DIG])]
    #[TestWith([PHP_FLOAT_EPSILON, FloatLimits::EPSILON])]
    #[TestWith([PHP_FLOAT_MAX, FloatLimits::MAX])]
    #[TestWith([PHP_FLOAT_MIN, FloatLimits::MIN])]
    public function testValuesAreCorrect (float $expected, float $actual):void {

        if (is_nan($expected)) self::assertNan($actual);
        else self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(FloatLimits::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}