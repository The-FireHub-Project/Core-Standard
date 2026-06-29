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
use FireHub\Core\Foundation\Constant\Environment\Php\RuntimeCapabilities;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};
use ReflectionClass, ReflectionException;

/**
 * ### Test PHP runtime execution capabilities and debug behavior flags
 * @since 1.0.0
 */
#[Small]
#[Group('foundation')]
#[CoversClass(RuntimeCapabilities::class)]
final class RuntimeCapabilitiesTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param bool|int $expected
     * @param bool|int $actual
     *
     * @return void
     */
    #[TestWith([ZEND_THREAD_SAFE, RuntimeCapabilities::THREAD_SAFE])]
    #[TestWith([ZEND_DEBUG_BUILD, RuntimeCapabilities::DEBUG_BUILD])]
    #[TestWith([DEBUG_BACKTRACE_PROVIDE_OBJECT, RuntimeCapabilities::BACKTRACE_PROVIDE_OBJECT])]
    #[TestWith([DEBUG_BACKTRACE_IGNORE_ARGS, RuntimeCapabilities::BACKTRACE_IGNORE_ARGS])]
    public function testValuesAreCorrect (bool|int $expected, bool|int $actual):void {

        self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(RuntimeCapabilities::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}