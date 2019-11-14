# PHP FFI Examples

FFI is a new feature that ships with PHP 7.4. Previously FFI for PHP was available as
a standalone extension, but it has now been included in the main PHP installation.

This repository has examples for various PHP FFI use cases, along with some Rust
examples that display how to create PHP FFI compatible C-ABI libraries for PHP usage.

The examples are tied to a blog series which I am writing, and the examples are
split into sections that resemble the blog series.

## Requirements

All code should be runnable without adjustments, assuming you have the following
prerequisites installed:

-   PHP 7.4 with FFI enabled,
-   Stable toolchain `rustc`/Cargo for compiling Rust libraries, the examples make
    use of Cargo, but you can use `rustc` if you know how to use it.

All examples are accompanied with a short guide on how to run or compile them.

The code has been written and tested on Linux Ubuntu, so you may have to make slight
adjustments to make them work in other environments properly.

Each example in this repository is a standalone "project", meaning they run
independently from each other.

## Licensing, modifying, and redistributing

All code provided in this repository is MIT licensed. These examples are meant to be
used as a reference or a starting point for real applications. There is no real value
in using the example code "as is", though I am not stopping you from doing that.
