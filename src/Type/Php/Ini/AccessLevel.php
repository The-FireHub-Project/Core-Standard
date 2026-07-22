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

namespace FireHub\Core\Type\Php\Ini;

/**
 * ### PHP INI Configuration Access Levels
 *
 * Represents the access levels available for PHP configuration directives.
 *
 * These values define where an INI configuration directive can be modified, including user scripts, per-directory
 * configuration files, and system-level configuration files.
 *
 * This enumeration mirrors PHP's native INI access mode definitions while providing a type-safe representation
 * within the FireHub ecosystem.
 * @since 1.0.0
 */
enum AccessLevel:int {

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini
     * @since 1.0.0
     */
    case USER = 1;

    /**
     * ### Entry can be set in php.ini, .htaccess, httpd.conf, or .user.ini
     * @since 1.0.0
     */
    case PER_DIR = 2;

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini, php.ini, .htaccess, or httpd.conf
     * @since 1.0.0
     */
    case USER_AND_PER_DIR = 3;

    /**
     * ### Entry can be set in php.ini or httpd.conf
     * @since 1.0.0
     */
    case SYSTEM = 4;

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini, php.ini, or httpd.conf
     * @since 1.0.0
     */
    case USER_AND_SYSTEM = 5;

    /**
     * ### Entry can be set in user scripts (like with ini_set()), in the Windows registry, or in .user.ini, php.ini, .htaccess, or httpd.conf
     * @since 1.0.0
     */
    case PER_DIR_AND_SYSTEM = 6;

    /**
     * ### Entry can be set anywhere
     * @since 1.0.0
     */
    case ALL = 7;

}