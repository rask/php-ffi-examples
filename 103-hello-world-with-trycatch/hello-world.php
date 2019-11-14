<?php declare(strict_types = 1);

/**
 * hello-world.php
 *
 * Run this as follows:
 *
 *     $ php hello-world.php
 *     > Hello world!
 */

try {
    $ffi = \FFI::load(__DIR__ . '/header.h');
} catch (\FFI\Exception $e) {
    // log error, do fail tasks, prevent running, etc.
}

$ffi->printf('Hello %s!', 'world');
