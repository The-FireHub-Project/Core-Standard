<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core\Tests
 */

namespace FireHub\Tests\Core\Unit\Foundation\Constant\Environment\Php;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Foundation\Constant\Environment\Php\PlatformInfo;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};
use ReflectionClass, ReflectionException;

/**
 * ### Test PHP runtime platform and execution environment information
 * @since 1.0.0
 */
#[Small]
#[Group('foundation')]
#[CoversClass(PlatformInfo::class)]
final class PlatformInfoTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param int|string $expected
     * @param int|string $actual
     *
     * @return void
     */
    #[TestWith([PHP_OS, PlatformInfo::OS])]
    #[TestWith([PHP_OS_FAMILY, PlatformInfo::OS_FAMILY])]
    #[TestWith([PHP_SAPI, PlatformInfo::SAPI])]
    #[TestWith([PHP_EOL, PlatformInfo::EOL])]
    #[TestWith([PHP_SHLIB_SUFFIX, PlatformInfo::SH_LIB_SUFFIX])]
    #[TestWith([PHP_FD_SETSIZE, PlatformInfo::FD_SET_SIZE])]
    public function testValuesAreCorrect (int|string $expected, int|string $actual):void {

        self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(PlatformInfo::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}