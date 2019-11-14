<?php declare(strict_types = 1);

/**
 * hello-world.php
 *
 * Run this as follows:
 *
 *     $ php hello-world.php
 *     > Hello world!
 */

$ffi = \FFI::cdef(
    'void printf(char *const str, ...);',
    'libc.so.6'
);

$ffi->printf('Hello %s!', 'world');
