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

namespace FireHub\Core\Type\IO;

/**
 * ### Stream Seek Origin
 *
 * Defines the reference position used when seeking within a stream.
 * @since 1.0.0
 */
enum SeekOrigin:int {

    /**
     * ### Seek relative to the beginning of the stream
     * @since 1.0.0
     */
    case START = SEEK_SET;

    /**
     * ### Seek relative to the current stream position
     * @since 1.0.0
     */
    case CURRENT = SEEK_CUR;

    /**
     * ### Seek relative to the end of the stream
     * @since 1.0.0
     */
    case END = SEEK_END;

}