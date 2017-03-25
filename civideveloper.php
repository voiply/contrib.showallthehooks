<?php

require_once 'civideveloper.civix.php';
require_once 'civideveloper.hooks.php';
require_once 'civideveloper.debug.php';

function civideveloper_civicrm_config(&$config) {
  dpm(_civideveloper_generate_hooks());
  _civideveloper_civix_civicrm_config($config);
}

