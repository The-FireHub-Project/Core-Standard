<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.2
 * @package Core
 */

namespace FireHub\Core\Type\FileSystem;

use FireHub\Core\Type\ValueObject;
use FireHub\Core\Meta\Enum\FileSystem\Permission;

/**
 * ### File System Permission Mode
 *
 * Represents a complete Unix-style file permission mode by combining owner, group, and other user permissions into
 * a single immutable value object.
 *
 * Encapsulates the read, write, and execute permission states for each permission scope and provides a type-safe
 * representation of filesystem access rules.
 * @since 1.0.0
 *
 * @extends \FireHub\Core\Type\ValueObject<
 *   array{
 *     owner: \FireHub\Core\Meta\Enum\FileSystem\Permission,
 *     group: \FireHub\Core\Meta\Enum\FileSystem\Permission,
 *     other: \FireHub\Core\Meta\Enum\FileSystem\Permission
 *   }
 * >
 */
final readonly class PermissionMode extends ValueObject {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param \FireHub\Core\Meta\Enum\FileSystem\Permission $owner <p>
     * File owner permission.
     * </p>
     * @param \FireHub\Core\Meta\Enum\FileSystem\Permission $group <p>
     * File owner group permission.
     * </p>
     * @param \FireHub\Core\Meta\Enum\FileSystem\Permission $other <p>
     * Everyone's permission.
     * </p>
     *
     * @return void
     */
    public function __construct (
        public Permission $owner,
        public Permission $group,
        public Permission $other
    ) {}

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():array {

        return [
            'owner' => $this->owner,
            'group' => $this->group,
            'other' => $this->other
        ];

    }

    /**
     * ### Get the permission mode in octal notation
     *
     * Returns the Unix file permission mode as a four-digit octal string.
     *
     * The returned value is suitable for display, serialization, or conversion to a decimal bitmask.
     * @since 1.0.0
     *
     * @return non-empty-string The permission mode in octal notation.
     */
    public function octal ():string {

        return '0'
            . $this->owner->value
            . $this->group->value
            . $this->other->value;

    }

    /**
     * ### Get the permission mode as a decimal bitmask
     *
     * Returns the Unix file permission mode as a decimal bitmask.
     *
     * The returned value is suitable for APIs that expect a numeric permission mask, such as chmod().
     * @since 1.0.0
     *
     * @return non-negative-int The permission mode as a decimal bitmask.
     */
    public function decimal ():int {

        /** @var non-negative-int */
        return
            ($this->owner->value << 6)
            | ($this->group->value << 3)
            | $this->other->value;

    }

}