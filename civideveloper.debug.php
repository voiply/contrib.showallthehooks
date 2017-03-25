<?php

/**
 * Debug a single value and its name, the best available way.
 *
 * Report which hooks got called.
 *
 * Show detail on a specific hook. Showing detail on all hooks will probably be
 * excessive - not hard to consume a lot of memory with dpm() and large objects.
 *
 * @TODO: WordPress debugging
 *   - https://wordpress.org/plugins/query-monitor/ ?
 *
 * @TODO: Joomla debugging
 *   - https://docs.joomla.org/How_to_debug_your_code ?
 *   - https://github.com/mathiasverraes/jdump
 */
function _civideveloper_debug($param, $name) {
  if (function_exists('dpm')) {
    dpm($param, $name);
  }
  elseif (function_exists('drupal_set_message')) {
    drupal_set_message(t('%name => @param', array('%name' => $name, '@param' => print_r($param, 1))));
  }
  else {
    // Core debug method.
  }
}

/**
 * Debug a series of function arguments and the called hook.
 */
function _civideveloper_debug_func_args($function, $args) {
  return;
  foreach ($args as $name => $arg) {
    _civideveloper_debug($arg, $function . ': $' . $name);
  }
}

/**
 * Extract a list of CiviCRM hooks.
 *
 * @TODO Include extension-provided hooks in results.
 */
function _civideveloper_list_hooks() {
  $hooks = get_class_methods("CRM_Utils_Hook");
  sort($hooks);
  return $hooks;
}