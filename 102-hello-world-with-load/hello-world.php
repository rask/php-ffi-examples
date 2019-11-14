<?php declare(strict_types = 1);

/**
 * hello-world.php
 *
 * Run this as follows:
 *
 *     $ php hello-world.php
 *     > Hello world!
 */

$ffi = \FFI::load(__DIR__ . '/header.h');

$ffi->printf('Hello %s!', 'world');
