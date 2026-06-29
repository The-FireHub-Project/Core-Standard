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

namespace FireHub\Tests\Core\Unit\Foundation\Constant\Error;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Foundation\Constant\Error\PhpErrorLevels;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};
use ReflectionClass, ReflectionException;

/**
 * ### Test PHP error reporting severity levels
 * @since 1.0.0
 */
#[Small]
#[Group('foundation')]
#[CoversClass(PhpErrorLevels::class)]
final class PhpErrorLevelsTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param int $expected
     * @param int $actual
     *
     * @return void
     */
    #[TestWith([E_ERROR, PhpErrorLevels::ERROR])]
    #[TestWith([E_WARNING, PhpErrorLevels::WARNING])]
    #[TestWith([E_PARSE, PhpErrorLevels::PARSE])]
    #[TestWith([E_NOTICE, PhpErrorLevels::NOTICE])]
    #[TestWith([E_CORE_ERROR, PhpErrorLevels::CORE_ERROR])]
    #[TestWith([E_CORE_WARNING, PhpErrorLevels::CORE_WARNING])]
    #[TestWith([E_COMPILE_ERROR, PhpErrorLevels::COMPILE_ERROR])]
    #[TestWith([E_COMPILE_WARNING, PhpErrorLevels::COMPILE_WARNING])]
    #[TestWith([E_USER_WARNING, PhpErrorLevels::USER_WARNING])]
    #[TestWith([E_USER_NOTICE, PhpErrorLevels::USER_NOTICE])]
    #[TestWith([E_RECOVERABLE_ERROR, PhpErrorLevels::RECOVERABLE_ERROR])]
    #[TestWith([E_DEPRECATED, PhpErrorLevels::DEPRECATED])]
    #[TestWith([E_USER_DEPRECATED, PhpErrorLevels::USER_DEPRECATED])]
    #[TestWith([E_ALL, PhpErrorLevels::ALL])]
    public function testValuesAreCorrect (int $expected, int $actual):void {

        self::assertSame($expected, $actual);

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCannotBeInstantiated ():void {

        $ref = new ReflectionClass(PhpErrorLevels::class);

        $this->expectException(ReflectionException::class);

        $ref->newInstance();

    }

}