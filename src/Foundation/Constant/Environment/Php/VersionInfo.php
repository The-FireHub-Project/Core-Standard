<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.5
 * @package Core
 */

namespace FireHub\Core\Foundation\Constant\Environment\Php;

use FireHub\Core\Boundary\Lifecycle\NonInstantiable;

use const PHP_BUILD_DATE;
use const PHP_EXTRA_VERSION;
use const PHP_MAJOR_VERSION;
use const PHP_MINOR_VERSION;
use const PHP_RELEASE_VERSION;
use const PHP_VERSION;
use const PHP_VERSION_ID;

/**
 * ### Represents PHP runtime version identity information
 *
 * Provides a detailed breakdown of the current PHP runtime version, including major, minor, release, and build
 * metadata used for environment detection, compatibility checks, and feature gating.
 *
 * This class exposes immutable PHP engine version constants and does not represent application versioning.
 * @since 1.0.0
 */
final class VersionInfo {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Full PHP runtime version string
     * @since 1.0.0
     */
    public const string VERSION = PHP_VERSION;

    /**
     * ### PHP major version number
     * @since 1.0.0
     */
    public const int MAJOR_VERSION = PHP_MAJOR_VERSION;

    /**
     * ### PHP minor version number
     * @since 1.0.0
     */
    public const int MINOR_VERSION = PHP_MINOR_VERSION;

    /**
     * ### PHP release version number
     * @since 1.0.0
     */
    public const int RELEASE_VERSION = PHP_RELEASE_VERSION;

    /**
     * ### PHP version ID used for comparison operations
     * @since 1.0.0
     */
    public const int VERSION_ID = PHP_VERSION_ID;

    /**
     * ### Additional PHP version suffix (distribution-specific)
     * @since 1.0.0
     */
    public const string EXTRA_VERSION = PHP_EXTRA_VERSION;

    /**
     * ### PHP build timestamp
     * @since 1.0.0
     */
    public const string BUILD_DATE = PHP_BUILD_DATE;

}