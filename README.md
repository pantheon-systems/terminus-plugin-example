# Terminus Plugin Example

[![CI](https://github.com/pantheon-systems/terminus-plugin-example/actions/workflows/main.yaml/badge.svg)](https://github.com/pantheon-systems/terminus-plugin-example/actions/workflows/main.yaml)
[![Actively Maintained](https://img.shields.io/badge/Pantheon-Actively_Maintained-yellow?logo=pantheon&color=FFDC28)](https://pantheon.io/docs/oss-support-levels#actively-maintained-support)

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

### CI

All jobs run on every push and PR with no setup needed. Tests that require a `TERMINUS_TOKEN` (a Terminus machine token) are skipped automatically when the secret isn't set.

## Help
Run `terminus help auth:hello` for help.
