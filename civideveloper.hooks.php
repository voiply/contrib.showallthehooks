<?php

/**
 * @file
 *
 * Manually compiled list of hooks.
 */

/**
 * Implements hook_civicrm_aclWhereClause().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_aclGroup/
 */
function civideveloper_civicrm_aclGroup($type, $contactID, $tableName, &$allGroups, &$currentGroups) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_aclWhereClause().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_aclWhereClause/
 */
function civideveloper_civicrm_aclWhereClause($type, &$tables, &$whereTables, &$contactID, &$where) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_aclWhereClause().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_aclWhereClause/
 */
function civideveloper_civicrm_alterAPIPermissions($entity, $action, &$params, &$permissions) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_aclWhereClause().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_aclWhereClause/
 */
function civideveloper_civicrm_alterBadge($labelName, &$label, &$format, &$participant) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_aclWhereClause().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_aclWhereClause/
 */
function civideveloper_civicrm_alterBarcode(&$data, $type, $context) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_customFieldOptions().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterPaymentProcessorParams/
 */
function civideveloper_civicrm_customFieldOptions($fieldID, &$options, $detailedFormat) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function civideveloper_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _civideveloper_civix_civicrm_alterSettingsFolders($metaDataFolders);
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

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
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_buildAmount.
 *
 * @formName string the name of the form
 * @form object reference to the form object
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildAmount
 */
function civideveloper_civicrm_buildAmount($pageType,&$form,&$amount){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_buildForm().
 *
 * @formName string the name of the form
 * @form object reference to the form object
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildForm
 */
function civideveloper_civicrm_buildForm($formName, &$form){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_copy
 */
function civideveloper_civicrm_copy($objectName, &$object){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_custom
 */
function civideveloper_civicrm_custom($op, $groupID, $entityID, &$params){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
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
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function civideveloper_civicrm_config(&$config) {
  _civideveloper_civix_civicrm_config($config);
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_dashboard
 */
function civideveloper_civicrm_dashboard($contactID, &$contentPlacement){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function civideveloper_civicrm_disable() {
  _civideveloper_civix_civicrm_disable();
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function civideveloper_civicrm_enable() {
  _civideveloper_civix_civicrm_enable();
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function civideveloper_civicrm_install() {
  _civideveloper_civix_civicrm_install();
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_links hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_links
 */
function civideveloper_civicrm_links($op, $objectName, $objectId, &$links) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function civideveloper_civicrm_mailingGroups(&$form, &$groups, &$mailings) {
  _civideveloper_civix_civicrm_managed($entities);
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
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
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 */
function civideveloper_civicrm_navigationMenu(&$menu) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
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
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_pageRun hook. This hook is called before a CiviCRM page is rendered
 *
 * @formName string the name of the form
 * @form object reference to the form object
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_pageRun
 */
function civideveloper_civicrm_pageRun(&$page){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements of CiviCRM _civicrm_post hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_post
 */
function civideveloper_civicrm_post($op, $objectName, $objectId, &$objectRef) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_preProcess hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 */
function civideveloper_civicrm_preProcess($formName, &$form) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
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
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_searchtasks hook. This hook is called to display the list of actions allowed after doing a contact search. This allows the module developer to inject additional actions or to remove existing actions.
 *
 * @objectType - the object for this search (currently only Contact, in later versions we will add membership / contribution / participants etc)
 * @tasks the current set of tasks for that custom field. You can add/remove existing tasks. Each task needs to have a title and a class.
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_searchTasks
 */
function civideveloper_civicrm_searchTasks($objectType, &$tasks){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_tabs hook. This hook is called when composing the tabs to display when viewing a contact
 *
 * @param array $tabs array of tabs to display
 * @param string  $contactID id of contact being displayed
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_tabs
 */
function civideveloper_civicrm_tabs(&$tabs, $contactID){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_summary hook. This hook is called when contact summary is rendered and you can add on top, below or replace summary with your own html content.
 *
 * @param array $tabs array of tabs to display
 * @param string  $contactID id of contact being displayed
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_summary
 */
function civideveloper_civicrm_summary($contactID, &$content, &$contentPlacement){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_tabs hook. This hook is called when composing the tabs to display when viewing a contact
 *
 * @param array $tabs array of tabs to display
 * @param string  $contactID id of contact being displayed
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_tabs
 */
function civideveloper_civicrm_tokens(&$tokens){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_tabs hook. This hook is called when composing the tabs to display when viewing a contact
 *
 * @param array $tabs array of tabs to display
 * @param string  $contactID id of contact being displayed
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_tabs
 */
function civideveloper_civicrm_tokenValues(&$values, $cids, $job = null, $tokens, $context) {
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
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
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implementation of CiviCRM _civicrm_validate hook
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_validate
 */
function civideveloper_civicrm_validate($formName, &$fields, &$files, &$form){
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
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
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function civideveloper_civicrm_uninstall() {
  _civideveloper_civix_civicrm_uninstall();
  $args = get_defined_vars();
  $function = preg_replace('/civideveloper/', 'hook', __FUNCTION__);
  _civideveloper_debug_func_args($function, $args);
}

/*
aclGroup
aclWhereClause
alterAPIPermissions
alterBadge
alterBarcode
alterCalculatedMembershipStatus
alterContent
alterDeferredRevenueItems
alterDisplayName
alterLocationMergeData
alterLogTables
alterMail
alterMailContent
alterMailParams
alterMailer
alterMailingLabelParams
alterMenu
alterPaymentProcessorParams
alterReportVar
alterSettingsFolders
alterSettingsMetaData
alterTemplateFile
angularModules
apiWrappers
batchItems
batchQuery
buildAmount
buildForm
buildProfile
buildStateProvinceForCountry
buildUFGroupsForModule
caseChange
caseSummary
caseTypes
check
commonBuildModuleList
commonInvoke
config
contactListQuery
container
copy
coreResourceList
cron
crudLink
custom
customFieldOptions
dashboard
dashboard_defaults
disable
dupeQuery
emailProcessor
emailProcessorContact
enable
entityRefFilters
entityTypes
eventDiscount
export
fieldOptions
fileSearches
geocoderFormat
idsException
import
install
invoke
links
mailingGroups
mailingTemplateTypes
managed
membershipTypeValues
merge
navigationMenu
notePrivacy
optionValues
pageRun
permission
permission_check
post
postEmailSend
postMailing
postProcess
postSave
post_case_merge
pre
preProcess
pre_case_merge
processProfile
queryObjects
recent
referenceCounts
requireCiviModules
runHooks
searchColumns
searchProfile
searchTasks
selectWhereClause
singleton
summary
summaryActions
tabs
tabset
tokenValues
tokens
triggerInfo
unhandledException
uninstall
unsubscribeGroups
upgrade
validateForm
validateProfile
viewProfile
xmlMenu
*/
