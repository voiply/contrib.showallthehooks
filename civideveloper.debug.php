<?php

/**
 * Debug a single value and its name, the best available way.
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
  foreach ($args as $name => $arg) {
    _civideveloper_debug($arg, $function . ': $' . $name);
  }
}
