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

namespace FireHub\Tests\Core\Unit\Type\FileSystem;

use FireHub\Testing\FireHubTestCase;
use FireHub\Core\Type\FileSystem\PermissionMode;
use FireHub\Core\Meta\Enum\FileSystem\Permission;
use PHPUnit\Framework\Attributes\ {
    CoversClass, Group, Small, TestWith
};

/**
 * ### Test File System Permission Mode
 * @since 1.0.0
 */
#[Small]
#[Group('type')]
#[CoversClass(PermissionMode::class)]
final class PermissionModeTest extends FireHubTestCase {

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testCreate ():void {

        $mode = new PermissionMode(
            Permission::ALL,
            Permission::READ_EXECUTE,
            Permission::READ_EXECUTE
        );

        self::assertSame(
            Permission::ALL,
            $mode->owner
        );

        self::assertSame(
            Permission::READ_EXECUTE,
            $mode->group
        );

        self::assertSame(
            Permission::READ_EXECUTE,
            $mode->other
        );

    }

    /**
     * @since 1.0.0
     *
     * @return void
     */
    public function testValue ():void {

        $mode = new PermissionMode(
            Permission::ALL,
            Permission::READ_EXECUTE,
            Permission::NONE
        );

        self::assertSame(
            [
                'owner' => Permission::ALL,
                'group' => Permission::READ_EXECUTE,
                'other' => Permission::NONE
            ],
            $mode->value()
        );

    }

}