<?php

require_once 'civideveloper.civix.php';

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function civideveloper_civicrm_angularModules(&$angularModules) {
  _civideveloper_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function civideveloper_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _civideveloper_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_buildAmount.
 *
 * @formName string the name of the form
 * @form object reference to the form object
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildAmount
 */
function civideveloper_civicrm_buildAmount($pageType,&$form,&$amount){
  drupal_set_message("hook_civicrm_buildAmount called: pageType is $pageType");
  //get_defined_vars doesn't work here because it just reports 'recursive' - left in to remin
  //me why I'm not using it so I don't try to switch :-)
  // dpm(get_defined_vars());
  dpm($amount,'amount');
  dpm($form,'form');
}

/**
 * Implements hook_civicrm_buildForm().
 *
 * @formName string the name of the form
 * @form object reference to the form object
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildForm
 */
function civideveloper_civicrm_buildForm($formName, &$form){
  drupal_set_message("hook_civicrm_buildForm called: formName is $formName");
  dpm($form);
}

/**
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_custom
 */
function civideveloper_civicrm_custom($op, $groupID, $entityID, &$params){
  drupal_set_message("<em>_civicrm_custom</em> called: This hook is called AFTER the db write on a custom table<p>op is $op. </p><br> entityID is $entityID<br> groupID is $groupID.<br>");
  dpm($params);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * @param array $caseTypes
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function civideveloper_civicrm_caseTypes(&$caseTypes) {
  _civideveloper_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function civideveloper_civicrm_config(&$config) {
  _civideveloper_civix_civicrm_config($config);
  drupal_set_message("hook_civicrm_config called: config is $config");
  dpm($objectRef);
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function civideveloper_civicrm_disable() {
  _civideveloper_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function civideveloper_civicrm_enable() {
  _civideveloper_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function civideveloper_civicrm_install() {
  _civideveloper_civix_civicrm_install();
}

/**
 * Implementation of CiviCRM _civicrm_links hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_links
 */
function civideveloper_civicrm_links($op, $objectName, $objectId, &$links) {
  drupal_set_message("hook_civicrm_links called: op is $op, objectName is $objectName, objectID is $objectId");
  dpm($links, "links");
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function civideveloper_civicrm_managed(&$entities) {
  _civideveloper_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 */
function civideveloper_civicrm_navigationMenu(&$menu) {
  /*
    _civideveloper_civix_insert_navigation_menu($menu, NULL, array(
      'label' => ts('The Page', array('domain' => 'contrib.civideveloper')),
      'name' => 'the_page',
      'url' => 'civicrm/the-page',
      'permission' => 'access CiviReport,access CiviContribute',
      'operator' => 'OR',
      'separator' => 0,
    ));
    _civideveloper_civix_navigationMenu($menu);
  */
}

/**
 * Implementation of CiviCRM _civicrm_postProcess hook. This hook is invoked when a CiviCRM
 * form is submitted. If the module has injected any form elements, this hook should save the values in the database.
 *
 * @formName string the name of the form
 * @form object reference to the form object
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postProcess
 */
function civideveloper_civicrm_postProcess($formName, &$form){
  drupal_set_message("hook_civicrm_postProcess called: formName is $formName");
  dpm(get_defined_vars());
}

/**
 * Implementation of CiviCRM _civicrm_pageRun hook. This hook is called before a CiviCRM page is rendered
 *
 * @formName string the name of the form
 * @form object reference to the form object
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_pageRun
 */
function civideveloper_civicrm_pageRun(&$page){
  drupal_set_message("hook_civicrm_pageRun called.  This hook is called before a CiviCRM page is rendered.

Note that this does not execute on every CiviCRM page in the general sense. CiviCRM's pages are classified as either 'Forms' or 'Pages', and this only runs on pages classified as 'Pages'. If you are not sure if a particular page is a Page, test it by adding some temporary debug code to /CRM/Utils/Hook.php");
  dpm($page);
}

/**
 * Implements of CiviCRM _civicrm_post hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_post
 */
function civideveloper_civicrm_post($op, $objectName, $objectId, &$objectRef) {
  $msg = "hook_civicrm_post called: op is $op, objectName is $objectName, objectID is $objectId";
  drupal_set_message("hook_civicrm_post called: op is $op, objectName is $objectName, objectID is $objectId");
  dpm($objectRef, $objectName . "civicrm_post hook");
}

/**
 * Implementation of CiviCRM _civicrm_preProcess hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 */
function civideveloper_civicrm_preProcess($formName, &$form) {
  drupal_set_message("hook_civicrm_preProcess called: formName is $formName");
  dpm($form);
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function civideveloper_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _civideveloper_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of CiviCRM _civicrm_validate hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_validate
 */
function civideveloper_civicrm_validate($formName, &$fields, &$files, &$form){
  drupal_set_message("hook_civicrm_validate called: formName is $formName");
  dpm($fields);
  dpm($files);
  dpm($form);
}

/**
 * Implementation of CiviCRM _civicrm_searchcolumns hook. This hook is called after a search is done. This allows the developer to modify the headers and/or the values that are displayed as part of this search. The BIGGEST drawback with this hook is that you may need to modify the result template to include your fields. The result files are CRM/{Contact,Contribute,Member,Event…}/Form/Selector.tpl. However, if you use the same number of columns, you can overwrite the existing columns with the values that you want displayed. This is a HACK, but avoids template modification.
 *
 * @objectName - the object for this search - activity, campaign, case, contact, contribution, event, grant, membership, and pledge are supported.
 * @headers - array (reference) - the list of column headers, an associative array with keys: ( name, sort, order )
 * @rows - array (reference) - the list of values, an associate array with fields that are displayed for that component
 * @selector - array (reference) - the selector object. Allows you access to the context of the search
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_searchColumns
 */
function civideveloper_civicrm_searchcolumns( $objectName, &$headers, &$rows, &$selector ){
  drupal_set_message("hook_civicrm_searchColumns called: objectName is $objectName. This hook is called after a search is done. This allows the developer to modify the headers and/or the values that are displayed as part of this search. The BIGGEST drawback with this hook is that you may need to modify the result template to include your fields. The result files are CRM/{Contact,Contribute,Member,Event…}/Form/Selector.tpl. However, if you use the same number of columns, you can overwrite the existing columns with the values that you want displayed. This is a HACK, but avoids template modification.");
  dpm($objectName,'objectType');
  dpm($headers,'headers');
  dpm($rows, 'rows');
  dpm($selector,'selector');
}

/**
 * Implementation of CiviCRM _civicrm_searchtasks hook. This hook is called to display the list of actions allowed after doing a contact search. This allows the module developer to inject additional actions or to remove existing actions.
 *
 * @objectType - the object for this search (currently only Contact, in later versions we will add membership / contribution / participants etc)
 * @tasks the current set of tasks for that custom field. You can add/remove existing tasks. Each task needs to have a title and a class.
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_searchTasks
 */
function civideveloper_civicrm_searchtasks($objectType, &$tasks){
  drupal_set_message("hook_civicrm_searchTasks called: objectType is $objectType. This hook is called to display the list of actions allowed after doing a contact search. This allows the module developer to inject additional actions or to remove existing actions.");
  dpm($objectType,'objectType');
  dpm($tasks,'tasks');
}

/**
 * Implementation of CiviCRM _civicrm_summary hook. This hook is called when contact summary is rendered and you can add on top, below or replace summary with your own html content.
 *
 * @param array $tabs array of tabs to display
 * @param string  $contactID id of contact being displayed
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_summary
 */
function civideveloper_civicrm_summary($contactID, &$content, &$contentPlacement){
  drupal_set_message("hook_civicrm_summary called");
  dpm($content,'content');
  dpm($contentPlacement ,'contentPlacement');
  dpm($contactID,'contactID');
}

/**
 * Implementation of CiviCRM _civicrm_tabs hook. This hook is called when composing the tabs to display when viewing a contact
 *
 * @param array $tabs array of tabs to display
 * @param string  $contactID id of contact being displayed
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_tabs
 */
function civideveloper_civicrm_tabs(&$tabs, $contactID){
  drupal_set_message("hook_civicrm_tabs called");

  dpm($tabs,'tabs');
  dpm($contactID,'contactID');
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param array $files
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function civideveloper_civicrm_xmlMenu(&$files) {
  _civideveloper_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function civideveloper_civicrm_uninstall() {
  _civideveloper_civix_civicrm_uninstall();
}



/*#
# hook_civicrm_custom
# hook_civicrm_aclWhereClause
# hook_civicrm_aclGroup
# hook_civicrm_dashboard
# hook_civicrm_xmlMenu
# hook_civicrm_alterPaymentProcessorParams
#
# hook_civicrm_copy
# hook_civicrm_tokens
# hook_civicrm_tokenValues
# hook_civicrm_customFieldOptions
# hook_civicrm_searchTasks
*/

/*
# hook_civicrm_mailingGroups

# hook_civicrm_contactListQuery
# hook_civicrm_membershipTypeValues
# hook_civicrm_alterMailParams
# hook_civicrm_caseSummary
# hook_civicrm_config
# hook_civicrm_navigationMenu
# hook_civicrm_merge
# hook_civicrm_export
# hook_civicrm_emailProcessor
*/
