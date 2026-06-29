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

namespace FireHub\Tests\Core\Unit\Exception;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Exception\FireHubException;
use FireHub\Tests\Core\Stubs\Exception\DummyException;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};

/**
 * ### Test Base FireHub Exception
 * @since 1.0.0
 */
#[Small]
#[Group('exception')]
#[CoversClass(FireHubException::class)]
final class FireHubExceptionTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param string $message
     * @param int $code
     *
     * @return void
     */
    #[TestWith(['error message', 123])]
    #[TestWith(['', 0])]
    public function testCreate (string $message, int $code):void {

        $previous = new DummyException('previous');

        $exception = new DummyException(
            $message,
            $code,
            $previous
        );

        $this->assertSame($message, $exception->getMessage());
        $this->assertSame($code, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testItSupportsExceptionChaining ():void {

        $root = new DummyException('root', 0);
        $mid = new DummyException('mid', 0, $root);
        $top = new DummyException('top', 0, $mid);

        $this->assertSame($mid, $top->getPrevious());
        $this->assertSame($root, $top->getPrevious()->getPrevious());

    }

}