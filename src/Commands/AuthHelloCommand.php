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

namespace Pantheon\TerminusHello\Commands;

use Pantheon\Terminus\Commands\TerminusCommand;

/**
 * Say hello to the user.
 *
 * When you rename this class, make sure the new name ends with "Command" so that Terminus can find it.
 */
class AuthHelloCommand extends TerminusCommand
{
    /**
     * Say hello
     *
     * @command auth:hello
     *
     * @authenticated
     */
    public function sayHello()
    {
        // Commands can retrieve information about the currently logged in user
        // by calling the `session` function to get a copy of the session object.
        if ($user = $this->session()->getUser()) {
            // For efficiency the logged in user's details are not automatically
            // fetched from the API. We call `fetch` on the object to get the
            // user's name.
            $user->fetch();
            // The logger can handle the replacement of variables.
            $this->log()->notice("Hello, {user}!", ['user' => $user->getName()]);
        } else {
            $this->log()->notice("Hello, Anonymous!");
        }
    }
}
