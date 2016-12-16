# Terminus Plugin Example

[![Terminus v1.x Compatible](https://img.shields.io/badge/terminus-v1.x-green.svg)](https://github.com/pantheon-systems/terminus-plugin-example/tree/1.x)
[![Terminus v0.x Compatible](https://img.shields.io/badge/terminus-v0.x-green.svg)](https://github.com/pantheon-systems/terminus-plugin-example/tree/0.x)

A simple plugin for Terminus-CLI to demonstrate how to add new commands.

Adds commands 'hello' and 'auth:hello' to Terminus 1.x. For a version that works with Terminus 0.x, see the [0.x branch](https://github.com/pantheon-systems/terminus-plugin-example/tree/0.x).

Learn more about Terminus and Terminus Plugins at:
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

## Help
Run `terminus help auth:hello` for help.
