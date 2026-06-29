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
use FireHub\Core\Foundation\Constant\Environment\Php\ConfigPaths;
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
#[CoversClass(ConfigPaths::class)]
final class ConfigPathsTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param string $expected
     * @param string $actual
     *
     * @return void
     */
    #[TestWith([PHP_CONFIG_FILE_PATH, ConfigPaths::CONFIG_FILE])]
    #[TestWith([PHP_CONFIG_FILE_SCAN_DIR, ConfigPaths::CONFIG_SCAN])]
    public function testValuesAreCorrect (string $expected, string $actual):void {

        self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(ConfigPaths::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}