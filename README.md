# Terminus (0.x) Plugin Example

[![Terminus v1.x Compatible](https://img.shields.io/badge/terminus-v1.x-green.svg)](https://github.com/pantheon-systems/terminus-plugin-example/tree/1.x)
[![Terminus v0.x Compatible](https://img.shields.io/badge/terminus-v0.x-green.svg)](https://github.com/pantheon-systems/terminus-plugin-example/tree/0.x)

A simple plugin for Terminus-CLI to demonstrate how to add new commands.

Adds commands 'hello' and 'auth hello' to the pre-release version of Terminus (v0.10.3 - v0.13). If you are writing a new plugin, please consider updating to Terminus 1.0 and developing for that version. For an example that works with Terminus 1.x, see the [1.x branch](https://github.com/pantheon-systems/terminus-plugin-example/tree/1.x).

Learn more about Terminus and Terminus Plugins at:
[https://github.com/pantheon-systems/cli/wiki/Plugins](https://github.com/pantheon-systems/cli/wiki/Plugins)

## Configuration

These commands require no configuration

## Examples
* `terminus hello`
* `terminus auth hello`

## Installation
For help installing, see [Terminus's Wiki](https://github.com/pantheon-systems/terminus/wiki/Plugins)
```
mkdir -p ~/terminus/plugins
cd ~/terminus/plugins
composer create-project pantheon-systems/terminus-plugin-example:dev-0.x
```

## Help
Run `terminus help auth hello` for help.
