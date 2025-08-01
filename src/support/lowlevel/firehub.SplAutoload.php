<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @php-version 8.0
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\LowLevel;

use FireHub\Core\Support\Exceptions\Autoload\ {
    RegisterAutoloaderException, UnregisterAutoloaderException
};

use function spl_autoload_call;
use function spl_autoload_extensions;
use function spl_autoload_functions;
use function spl_autoload_register;
use function spl_autoload_unregister;

/**
 * ### SPL Autoload low-level proxy class
 * @since 1.0.0
 */
final class SplAutoload {

    /**
     * ### Register a callback function as an autoloader
     *
     * Register a function with the spl provided autoloaded queue.
     * If the queue is not yet activated, it will be activated.
     * If there must be multiple autoload functions, this method allows for this.
     * It effectively creates a queue of autoload functions and runs through each of them in the order they are defined.
     * @since 1.0.0
     *
     * @param null|callable(string):void $callback [optional] <p>
     * The autoload function being registered. If no callback is provided, then the default autoloader will be used.
     * </p>
     * @param bool $prepend [optional] <p>
     * Whether to prepend the autoloader on the stack instead of appending it.
     * </p>
     *
     * @throws \FireHub\Core\Support\Exceptions\Autoload\RegisterAutoloaderException If failed to register a callback
     * function as an autoloader.
     *
     * @return true True if autoloader was registered.
     */
    public static function register (?callable $callback = null, bool $prepend = false):true {

        return spl_autoload_register($callback, true, $prepend)
            ?: throw new RegisterAutoloaderException;

    }

    /**
     * ### Unregister autoload implementation
     *
     * Removes a function from the autoloaded queue.
     * If the queue is activated and empty after removing the given function, then it will be deactivated.
     * When this function results in the queue being deactivated, any autoload function that previously existed will
     * not be reactivated.
     * @since 1.0.0
     *
     * @param callable(string):void $callback <p>
     * The autoload function that will be unregistered.
     * </p>
     *
     * @throws \FireHub\Core\Support\Exceptions\Autoload\UnregisterAutoloaderException If failed to unregister
     * autoloader implementation.
     *
     * @return true True if autoloader was unregistered.
     */
    public static function unregister (callable $callback):true {

        return spl_autoload_unregister($callback)
            ?: throw new UnregisterAutoloaderException;

    }

    /**
     * ### Get all registered autoload functions
     * @since 1.0.0
     *
     * @return list<mixed> An array of all registered autoload functions, or if no function is registered,
     * or autoloaded queue is not activated; then the return value will be an empty array.
     */
    public static function functions ():array {

        return spl_autoload_functions();

    }

    /**
     * ### Try all registered autoload functions to load the requested class
     * @since 1.0.0
     *
     * @param class-string $class <p>
     * Fully qualified class name that is being called.
     * </p>
     *
     * @return void
     *
     * @note This method can be used to manually search for a class or interface using the registered autoloader
     * functions.
     */
    public static function load (string $class):void {

        spl_autoload_call($class);

    }

    /**
     * ### Register and return default file extensions for default autoloader
     * @since 1.0.0
     *
     * @param null|string $file_extensions [optional] <p>
     * If null, it simply returns the current list of extensions each separated by comma. To modify the list of file
     * extensions, simply invoke the functions with the new list of file extensions to use in a single string with each
     * extension separated by comma.
     * </p>
     *
     * @return void A list of default file extensions for default autoloader.
     */
    public static function extensions (?string $file_extensions = null):void {

        spl_autoload_extensions($file_extensions);

    }

}