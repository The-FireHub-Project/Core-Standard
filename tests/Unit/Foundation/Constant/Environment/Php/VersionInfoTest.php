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
use FireHub\Core\Foundation\Constant\Environment\Php\VersionInfo;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};
use ReflectionClass, ReflectionException;

/**
 * ### Test PHP configuration file locations and scan directories
 * @since 1.0.0
 */
#[Small]
#[Group('foundation')]
#[CoversClass(VersionInfo::class)]
final class VersionInfoTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param int|string $expected
     * @param int|string $actual
     *
     * @return void
     */
    #[TestWith([PHP_VERSION, VersionInfo::VERSION])]
    #[TestWith([PHP_MAJOR_VERSION, VersionInfo::MAJOR_VERSION])]
    #[TestWith([PHP_MINOR_VERSION, VersionInfo::MINOR_VERSION])]
    #[TestWith([PHP_RELEASE_VERSION, VersionInfo::RELEASE_VERSION])]
    #[TestWith([PHP_VERSION_ID, VersionInfo::VERSION_ID])]
    #[TestWith([PHP_EXTRA_VERSION, VersionInfo::EXTRA_VERSION])]
    #[TestWith([PHP_BUILD_DATE, VersionInfo::BUILD_DATE])]
    public function testValuesAreCorrect (int|string $expected, int|string $actual):void {

        self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(VersionInfo::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}