<?php

require_once 'showallthehooks.hooks.php';

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
function _showallthehooks_debug($param, $name) {
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
function _showallthehooks_debug_func_args($function, $args) {
  foreach ($args as $name => $arg) {
    _showallthehooks_debug($arg, $function . ': $' . $name);
  }
}

/**
 * Extract a list of CiviCRM hooks.
 *
 * @TODO Include extension-provided hooks in results.
 *
 * @return array of ReflectionClass objects.
 */
function _showallthehooks_list_hooks() {
  $class = new ReflectionClass('CRM_Utils_Hook');
  $hooks = $class->getMethods(ReflectionMethod::IS_STATIC);
  $ignore = ['singleton'];
  sort($hooks);
  $hooks = array_filter($hooks, function($m) use ($ignore) {
    if (isset($m->name) && !in_array($m->name, $ignore)) {
      return true;
    }
  });
  return $hooks;
}

/**
 * Generate debug functions for all hooks.
 */
function _showallthehooks_generate_hooks() {
  $source = '';
  foreach (_showallthehooks_list_hooks() as $hook) {
    $source .= _showallthehooks_generate_hook($hook);
  }
  return <<<EOT
<?php
/**
 * @file
 * This file is generated automatically. It contains example implementations of 
 * all core CiviCRM hooks. You can edit it to enable additional debug on any 
 * hook. To regenerate the file, see docs.
 *
 * @TODO link to docs above :)
 */

{$source}
EOT;
}

/**
 * Generate a debug function for a specific hook.
 */
function _showallthehooks_generate_hook(ReflectionMethod $hook) {
  $prefix = 'showallthehooks_civicrm_';
  $docs = $hook->getDocComment();
  $parameters = $hook->getParameters();

  $params = [];
  foreach ($parameters as $parameter) {
    $params[] =
      $parameter->isPassedByReference() ?
        '&$' . $parameter->getName() :
        '$' . $parameter->getName();
  }
  $params = implode(', ', $params);
  $method_name = $prefix . $hook->getName();

  return <<<EOT
  
{$hook->getDocComment()}
function {$method_name}({$params}) {
  \$args = get_defined_vars();
  \$function = preg_replace('/showallthehooks/', 'hook', __FUNCTION__);
  _showallthehooks_debug(\$function, 'showallthehooks: CiviCRM called hook');
  // _showallthehooks_debug_func_args(\$function, \$args);
}

EOT;
}

