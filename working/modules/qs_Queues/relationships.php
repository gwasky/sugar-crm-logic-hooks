<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2008 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
$relationships = array (
  'qs_queues_cases' => 
  array (
    'id' => 'b3215764-41d7-70fc-ca82-4a2d09b8f864',
    'relationship_name' => 'qs_queues_cases',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'join_table' => 'qs_queues_cases_c',
    'join_key_lhs' => 'qs_queues_csqs_queues_ida',
    'join_key_rhs' => 'qs_queues_casescases_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_activities_meetings' => 
  array (
    'id' => 'b374b790-8b8f-209d-8415-4a2d0939c6dc',
    'relationship_name' => 'qs_queues_activities_meetings',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'qs_Queues',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_accounts' => 
  array (
    'id' => 'b3ac27cc-c984-1321-c562-4a2d09f17ea6',
    'relationship_name' => 'qs_queues_accounts',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'join_table' => 'qs_queues_accounts_c',
    'join_key_lhs' => 'qs_queues_asqs_queues_ida',
    'join_key_rhs' => 'qs_queues_atsaccounts_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_activities_notes' => 
  array (
    'id' => 'b3c7d2c3-e2dc-3f9f-a483-4a2d0945cf3a',
    'relationship_name' => 'qs_queues_activities_notes',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'qs_Queues',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_activities_tasks' => 
  array (
    'id' => 'b3e473d6-77f6-576d-3da8-4a2d0991fd01',
    'relationship_name' => 'qs_queues_activities_tasks',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'qs_Queues',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_activities_calls' => 
  array (
    'id' => 'b454f73c-e705-0a24-887b-4a2d09d84463',
    'relationship_name' => 'qs_queues_activities_calls',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'qs_Queues',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_sv_sitesurvey' => 
  array (
    'id' => 'b48b7a01-4585-154a-cad9-4a2d09f7cd25',
    'relationship_name' => 'qs_queues_sv_sitesurvey',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'SV_SiteSurvey',
    'rhs_table' => 'sv_sitesurvey',
    'rhs_key' => 'id',
    'join_table' => 'qs_queues_sv_sitesurvey_c',
    'join_key_lhs' => 'qs_queues_syqs_queues_ida',
    'join_key_rhs' => 'qs_queues_ssitesurvey_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_opportunities' => 
  array (
    'id' => 'b4a8a14f-2152-3c49-7ee2-4a2d0905fc2b',
    'relationship_name' => 'qs_queues_opportunities',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'join_table' => 'qs_queues_opportunities_c',
    'join_key_lhs' => 'qs_queues_osqs_queues_ida',
    'join_key_rhs' => 'qs_queues_oortunities_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_leads' => 
  array (
    'id' => 'b4c50660-547f-8796-c26e-4a2d09bba17f',
    'relationship_name' => 'qs_queues_leads',
    'lhs_module' => 'qs_Queues',
    'lhs_table' => 'qs_queues',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'join_table' => 'qs_queues_leads_c',
    'join_key_lhs' => 'qs_queues_lsqs_queues_ida',
    'join_key_rhs' => 'qs_queues_leadsleads_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'qs_queues_tr_trials' => 
  array (
    'rhs_label' => 'Trials',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'qs_Queues',
    'rhs_module' => 'tr_Trials',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'relationship_name' => 'qs_queues_tr_trials',
  ),
);
?>
