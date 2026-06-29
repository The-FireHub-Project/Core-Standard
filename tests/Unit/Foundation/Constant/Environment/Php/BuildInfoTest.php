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

namespace FireHub\Tests\Core\Unit\Foundation\Constant\Environment\Php;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Foundation\Constant\Environment\Php\BuildInfo;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};
use ReflectionClass, ReflectionException;

/**
 * ### Test PHP build and installation directory metadata
 * @since 1.0.0
 */
#[Small]
#[Group('foundation')]
#[CoversClass(BuildInfo::class)]
final class BuildInfoTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param string $expected
     * @param string $actual
     *
     * @return void
     */
    #[TestWith([PHP_BINARY, BuildInfo::BINARY_PATH])]
    #[TestWith([PHP_BINDIR, BuildInfo::BINARY_DIR])]
    #[TestWith([PHP_SBINDIR, BuildInfo::SBIN_DIR])]
    #[TestWith([PHP_PREFIX, BuildInfo::PREFIX])]
    #[TestWith([PHP_SYSCONFDIR, BuildInfo::SYS_CONFIG_DIR])]
    public function testValuesAreCorrect (string $expected, string $actual):void {

        self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(BuildInfo::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}