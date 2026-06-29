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

namespace FireHub\Tests\Core\Unit\Type;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Type\ValueObject;
use FireHub\Core\Type\Exception\ValueObjectException;
use FireHub\Tests\Core\Stubs\Type\ {
    DummyIntVO, DummyStringVO, DummyVOInvalidGuardException
};
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};

/**
 * ### Test Base Value Object
 * @since 1.0.0
 */
#[Small]
#[Group('type')]
#[CoversClass(ValueObject::class)]
final class ValueObjectTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @param string $a
     * @param string $b
     * @param bool $expected
     *
     * @throws \FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodeValueException
     * @throws \FireHub\Core\Exception\FireHubException
     * @throws \FireHub\Core\Type\Exception\ValueObjectException
     *
     * @return void
     */
    #[TestWith(['x', 'x', true])]
    #[TestWith(['x', 'y', false])]
    public function testEquals (string $a, string $b, bool $expected):void {

        $a = new DummyStringVO($a);
        $b = new DummyStringVO($b);

        $this::assertSame($expected, $a->equals($b));

    }

    /**
     * @since 1.0.0
     *
     * @param string $a
     * @param string $b
     * @param bool $expected
     *
     * @return void
     */
    #[TestWith([DummyStringVO::class, DummyStringVO::class, true])]
    #[TestWith([DummyStringVO::class, DummyIntVO::class, false])]
    public function testSameAs (string $a, string $b, bool $expected):void {

        $a = new $a;
        $b = new $b;

        $this::assertSame($expected, $a->sameAs($b));

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCreateWithInvalidValue ():void {

        $this->expectException(ValueObjectException::class);

        new DummyVOInvalidGuardException('');

    }

}