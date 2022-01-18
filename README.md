# Terminus Plugin Example

[![GitHub Actions](https://github.com/pantheon-systems/terminus-plugin-example/actions/workflows/ci.yml/badge.svg)](https://github.com/pantheon-systems/terminus-plugin-example/actions)
[![Terminus v2.x - v3.x Compatible](https://img.shields.io/badge/terminus-2.x%20--%203.x-green.svg)](https://github.com/pantheon-systems/terminus-plugin-example/tree/2.x)

A simple plugin for Terminus-CLI to demonstrate how to add new commands.

Adds commands 'hello' and 'auth:hello' to Terminus. Learn more about Terminus Plugins in the
[Terminus Plugins documentation](https://pantheon.io/docs/terminus/plugins)

## Configuration

These commands require no configuration

## Usage
* `terminus hello`
* `terminus auth:hello`

## Installation

To install this plugin using Terminus 3:
```
terminus self:plugin:install terminus-plugin-example
```

On older versions of Terminus:
```
mkdir -p ~/.terminus/plugins
curl https://github.com/pantheon-systems/terminus-plugin-example/archive/2.x.tar.gz -L | tar -C ~/.terminus/plugins -xvz
```
For help installing, see [Manage Plugins](https://pantheon.io/docs/terminus/plugins/).

## Testing
This example project includes four testing targets:

* `composer lint`: Syntax-check all php source files.
* `composer cs`: Code-style check.
* `composer unit`: Run unit tests with phpunit
* `composer functional`: Run functional test with bats

Prior to running the tests, you should first run:
* `composer install`
* `composer install-tools`

To run all tests together, use `composer test`.

## Help
Run `terminus help auth:hello` for help.
