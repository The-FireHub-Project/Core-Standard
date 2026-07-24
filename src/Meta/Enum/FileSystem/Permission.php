<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Meta\Enum\FileSystem;

/**
 * ### File permission modes
 *
 * Represents file permissions using read, write, and execute modes.
 * @since 1.0.0
 */
enum Permission:int {

    /**
     * ### No permissions
     *
     * The file has no read, write, or execute permissions.
     * @since 1.0.0
     */
    case NONE = 0;

    /**
     * ### Execute permission
     *
     * Allows executing the file as a program.
     * @since 1.0.0
     */
    case EXECUTE = 1;

    /**
     * ### Write permission
     *
     * Allows modifying or removing the file contents.
     * @since 1.0.0
     */
    case WRITE = 2;

    /**
     * ### Write and execute permissions
     *
     * Allows modifying and executing the file.
     * @since 1.0.0
     */
    case WRITE_EXECUTE = 3;

    /**
     * ### Read permission
     *
     * Allows reading the file contents.
     * @since 1.0.0
     */
    case READ = 4;

    /**
     * ### Read and execute permissions
     *
     * Allows reading and executing the file.
     * @since 1.0.0
     */
    case READ_EXECUTE = 5;

    /**
     * ### Read and write permissions
     *
     * Allows reading and modifying the file.
     * @since 1.0.0
     */
    case READ_WRITE = 6;

    /**
     * ### Full permissions
     *
     * Allows reading, writing, and executing the file.
     * @since 1.0.0
     */
    case ALL = 7;

}