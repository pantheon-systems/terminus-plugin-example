<?php
/**
 * This variation on the Hello command shows how to add new subcommands to an
 * existing command.
 * 
 * To add your subcommands to an existing command use a @command tag with the same
 * value as the existing tag.
 * 
 * This command can be invoked by running `terminus auth hello`
 */

namespace Terminus\Commands;

use Terminus\Commands\TerminusCommand;
use Terminus\Session;

/**
 * Say hello to the user
 * 
 * @command auth
 */
class AuthHelloCommand extends TerminusCommand {
  /**
   * Say hello
   */
  public function hello($args, $assoc_args) {
    if (Session::getValue('user_uuid')) {
      $user = Session::getUser();
      $user->fetch();

      $data = $user->serialize();
      $this->log()->info("Hello, {name}!", array('name' => $data['firstname']));
    } else {
      $this->log()->info("Hello, Anonymous!");
    }
  }
}
