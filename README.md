# Show All The Hooks

## Using

This extension will show all the hooks called by CiviCRM. The hook implementations are all in `showallthehooks.hooks.php`, and you'll find you can enable more debug about what parameters get passed in by uncommenting the additional debug in each hook.

## Updating

If a new hook is added, or if you have hacked the hook implementation and want to restore the original .hooks code, you can use this `cv` command in the extension directory.

    cv ev 'print _showallthehooks_generate_hooks()' > showallthehooks.hooks.php

## TODO

* If Drupal dpm etc is available, use it, else use Civi debug
* Replace all the hook implementations with a dynamic generator
* Link in online docs?
