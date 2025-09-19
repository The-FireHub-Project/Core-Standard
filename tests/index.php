<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * This is the main app landing file for all HTTP requests.
 * PHP version 8.5
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package App\Web
 *
 * @version GIT: $Id$ Blob checksum.
 * @php-version 8.4
 */

use FireHub\Core\Support\LowLevel\DateAndTime;

$string = "O'Reilly";

\PHPStan\dumpType(microtime());
\PHPStan\dumpType(DateAndTime::microtime());