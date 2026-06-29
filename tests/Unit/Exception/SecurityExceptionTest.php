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
use FireHub\Core\Exception\SecurityException;
use FireHub\Core\Exception\Code;
use FireHub\Tests\Core\Stubs\Exception\DummySecurityException;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};

/**
 * ### Test Security FireHub Exception
 * @since 1.0.0
 */
#[Small]
#[Group('exception')]
#[CoversClass(SecurityException::class)]
final class SecurityExceptionTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param string $message
     * @param int $code
     *
     * @throws \FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodeValueException
     * @throws \FireHub\Core\Exception\FireHubException
     * @throws \FireHub\Core\Type\Exception\ValueObjectException
     *
     * @return void
     */
    #[TestWith(['error message', 123])]
    #[TestWith(['', 0])]
    public function testCreate (string $message, int $code):void {

        $previous = new DummySecurityException('previous');

        $exception = new DummySecurityException(
            $message,
            new Code($code),
            $previous
        );

        $this->assertSame($message, $exception->getMessage());
        $this->assertSame($code, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());

    }

}