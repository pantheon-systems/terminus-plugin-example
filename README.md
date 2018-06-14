# Terminus Plugin Example

[![CircleCI](https://circleci.com/gh/pantheon-systems/terminus-plugin-example.svg?style=shield)](https://circleci.com/gh/pantheon-systems/terminus-plugin-example)
[![Terminus v1.x Compatible](https://img.shields.io/badge/terminus-v1.x-green.svg)](https://github.com/pantheon-systems/terminus-secrets-plugin/tree/1.x)

A simple plugin for Terminus-CLI to demonstrate how to add new commands.

Adds commands 'hello' and 'auth:hello' to Terminus. Learn more about Terminus and Terminus Plugins at:
[https://github.com/pantheon-systems/cli/wiki/Plugins](https://github.com/pantheon-systems/cli/wiki/Plugins)

## Configuration

These commands require no configuration

## Usage
* `terminus hello`
* `terminus auth:hello`

## Installation
To install this plugin place it in `~/.terminus/plugins/`.

On Mac OS/Linux:
```
mkdir -p ~/.terminus/plugins
curl https://github.com/pantheon-systems/terminus-plugin-example/archive/1.x.tar.gz -L | tar -C ~/.terminus/plugins -xvz
```

## Testing
This example project includes four testing targets:

* `composer lint`: Syntax-check all php source files.
* `composer cs`: Code-style check.
* `composer unit`: Run unit tests with phpunit
* `composer functional`: Run functional test with bats

To run all tests together, use `composer test`.

Note that prior to running the tests, you should first run:
* `composer install`
* `composer install-tools`

## Help
Run `terminus help auth:hello` for help.
