<?php
/**
 * This simple command shows the basics of how to add a new top-level command
 * to Terminus.
 * 
 * To add a command simply define a class as a subclass of 
 * `Terminus\Commands\TerminusCommand` and place it in a php file inside the
 * 'Commands' directory inside your plugin directory.
 * 
 * To specify what the command name should be use the `@command` tag in the 
 * class DocBlock
 * 
 * This command can be invoked by running `terminus hello`
 */

namespace Terminus\Commands;

use Terminus\Commands\TerminusCommand;

/**
 * Say hello to the user
 * 
 * @command hello
 */
class HelloCommand extends TerminusCommand {
  /**
   * Print the classic first program message to the log.
   */
  function __invoke($args, $assoc_args) {
    $this->log()->info("Hello, World!");
  }
}
