<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login_view']);
Route::post('admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);

Route::post('change_password', [App\Http\Controllers\Admin\Auth\LoginController::class, 'changePassword'])->name('change.password');
Route::get('update_password', [App\Http\Controllers\Admin\Auth\LoginController::class, 'update_password']);

Route::get('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout']);

Route::post('/send-password-reset-email', [App\Http\Controllers\Admin\Auth\LoginController::class, 'sendPasswordResetEmail'])->name('password.email');
 Route::get('/forgot-password', [App\Http\Controllers\Admin\Auth\LoginController::class,'forgotPasswordForm'])->name('password.request');
 Route::post('/send-password-reset-email', [App\Http\Controllers\Admin\Auth\LoginController::class,'sendPasswordResetEmail'])->name('password.email');
 Route::get('/reset-password/{token}', [App\Http\Controllers\Admin\Auth\LoginController::class,'showResetForm'])->name('password.reset');
 Route::post('/reset-password', [App\Http\Controllers\Admin\Auth\LoginController::class,'resetPassword'])->name('password.update');
 Route::get('/email', [App\Http\Controllers\Admin\Auth\LoginController::class,'email'])->name('email');

Route::post('/reset-password', [App\Http\Controllers\Admin\Auth\LoginController::class, 'resetPassword'])->name('password.update');
Route::group(['middleware' => 'Back_Button'], function () {
Route::group(['middleware' => 'Admincheck'], function () {
Route::group(['middleware' => 'open_Redirection'], function () {
Route::get('dashboard', [App\Http\Controllers\Admin\IndexController::class, 'dashboard']);


Route::get('add-project/{id?}', [App\Http\Controllers\Admin\IndexController::class, 'project_view']);
 Route::post('add-project', [App\Http\Controllers\Admin\IndexController::class, 'project_save']);
 Route::post('add-project/{id?}', [App\Http\Controllers\Admin\IndexController::class, 'project_update']);
 Route::get('project-delete/{id}', [App\Http\Controllers\Admin\IndexController::class, 'project_delete']);

Route::get('slider/{id?}', [App\Http\Controllers\Admin\CMSController::class, 'slider'])->name('slider');
Route::post('slider', [App\Http\Controllers\Admin\CMSController::class, 'sliderSave']);

Route::post('slider/{id?}', [App\Http\Controllers\Admin\CMSController::class, 'sliderUpdate']);
Route::get('slider-delete/{id}', [App\Http\Controllers\Admin\CMSController::class, 'sliderdelete']);

 #notification
 Route::get('notification/{id?}', [App\Http\Controllers\Admin\CMSController::class, 'notification_view']);
 Route::post('notification', [App\Http\Controllers\Admin\CMSController::class, 'notification_save']);
 Route::post('notification/{id?}', [App\Http\Controllers\Admin\CMSController::class, 'notification_update']);
 Route::get('notification-delete/{id}', [App\Http\Controllers\Admin\CMSController::class, 'notification_delete']);

 Route::get('mini-slider/{id?}', [App\Http\Controllers\Admin\CMSController::class, 'mini_slider']);
 Route::post('mini-slider', [App\Http\Controllers\Admin\CMSController::class, 'mini_slider_save']);
 Route::post('mini-slider/{id?}', [App\Http\Controllers\Admin\CMSController::class, 'mini_slider_update']);
 Route::get('mini-slider-delete/{id}', [App\Http\Controllers\Admin\CMSController::class, 'mini_slider_delete']);

#HRM1

Route::get('add-sparrow/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'Sparrow_view']);
Route::post('add-sparrow', [App\Http\Controllers\Admin\HRM1Controller::class, 'Sparrow_save']);
Route::post('add-sparrow/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'Sparrow_update']);
Route::get('sparrow-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'Sparrow_delete']);

#apar
Route::get('add-apar/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'apar_view']);
Route::post('add-apar', [App\Http\Controllers\Admin\HRM1Controller::class, 'apar_save']);
Route::post('add-apar/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'apar_update']);
Route::get('apar-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'apar_delete']);

#IPR
Route::get('add-ipr/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'ipr_view']);
Route::post('add-ipr', [App\Http\Controllers\Admin\HRM1Controller::class, 'ipr_save']);
Route::post('add-ipr/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'ipr_update']);
Route::get('ipr-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'ipr_delete']);

#Recruitment Rules
Route::get('add-group-a/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_a_view']);
Route::post('add-group-a', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_a_save']);
Route::post('add-group-a/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_a_update']);
Route::get('group-a-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_a_delete']);

Route::get('add-group-b/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_b_view']);
Route::post('add-group-b', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_b_save']);
Route::post('add-group-b/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_b_update']);
Route::get('group-b-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_b_delete']);


Route::get('add-group-c/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_c_view']);
Route::post('add-group-c', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_c_save']);
Route::post('add-group-c/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_c_update']);
Route::get('group-c-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'group_c_delete']);

Route::get('add-canteen-staff/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'canteen_view']);
Route::post('add-canteen-staff', [App\Http\Controllers\Admin\HRM1Controller::class, 'canteen_save']);
Route::post('add-canteen-staff/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'canteen_update']);
Route::get('canteen-staff-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'canteen_delete']);

Route::get('add-cbn/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'cbn_view']);
Route::post('add-cbn', [App\Http\Controllers\Admin\HRM1Controller::class, 'cbn_save']);
Route::post('add-cbn/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'cbn_update']);
Route::get('cbn-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'cbn_delete']);

#crcl
Route::get('add-crcl/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'crcl_view']);
Route::post('add-crcl', [App\Http\Controllers\Admin\HRM1Controller::class, 'crcl_save']);
Route::post('add-crcl/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'crcl_update']);
Route::get('crcl-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'crcl_delete']);

#DGPM
Route::get('add-dgpm/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dgpm_view']);
Route::post('add-dgpm', [App\Http\Controllers\Admin\HRM1Controller::class, 'dgpm_save']);
Route::post('add-dgpm/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dgpm_update']);
Route::get('dgpm-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dgpm_delete']);

#DIRECTORATE OF LOGISTICS
Route::get('add-directorate-of-logistics/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'Directorate_of_logistics_view']);
Route::post('add-directorate-of-logistics', [App\Http\Controllers\Admin\HRM1Controller::class, 'Directorate_of_logistics_save']);
Route::post('add-directorate-of-logistics/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'Directorate_of_logistics_update']);
Route::get('directorate-of-logistics-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'Directorate_of_logistics_delete']);

#DPPR
Route::get('add-dppr/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dppr_view']);
Route::post('add-dppr', [App\Http\Controllers\Admin\HRM1Controller::class, 'dppr_save']);
Route::post('add-dppr/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dppr_update']);
Route::get('dppr-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dppr_delete']);

#DRI
Route::get('add-dri/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dri_view']);
Route::post('add-dri', [App\Http\Controllers\Admin\HRM1Controller::class, 'dri_save']);
Route::post('add-dri/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dri_update']);
Route::get('dri-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dri_delete']);


Route::get('add-rrs-of-directorates/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'rrs_of_directorates_view']);
Route::post('add-rrs-of-directorates', [App\Http\Controllers\Admin\HRM1Controller::class, 'rrs_of_directorates_save']);
Route::post('add-rrs-of-directorates/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'rrs_of_directorates_update']);
Route::get('rrs-of-directorates-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'rrs_of_directorates_delete']);

#SYSTEMS & DATA MANAGEMENT
Route::get('add-systum-data-management/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'systum_data_management_view']);
Route::post('add-systum-data-management', [App\Http\Controllers\Admin\HRM1Controller::class, 'systum_data_management_save']);
Route::post('add-systum-data-management/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'systum_data_management_update']);
Route::get('systum-data-management-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'systum_data_management_delete']);

#telecommunication_wing
Route::get('add-telecommunication-wing/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'telecommunication_wing_view']);
Route::post('add-telecommunication-wing', [App\Http\Controllers\Admin\HRM1Controller::class, 'telecommunication_wing_save']);
Route::post('add-telecommunication-wing/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'telecommunication_wing_update']);
Route::get('telecommunication-wing-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'telecommunication_wing_delete']);

#seniority_list
Route::get('add-seniority-list/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'seniority_list_view']);
Route::post('add-seniority-list', [App\Http\Controllers\Admin\HRM1Controller::class, 'seniority_list_save']);
Route::post('add-seniority-list/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'seniority_list_update']);
Route::get('seniority-list-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'seniority_list_delete']);

#dpc
Route::get('add-dpc1/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dpc_view']);
Route::post('add-dpc1', [App\Http\Controllers\Admin\HRM1Controller::class, 'dpc_save']);
Route::post('add-dpc1/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dpc_update']);
Route::get('dpc1-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'dpc_delete']);

#empanelment-deputation
Route::get('add-empanelment-deputation/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'empanelment_deputation_view']);
Route::post('add-empanelment-deputation', [App\Http\Controllers\Admin\HRM1Controller::class, 'empanelment_deputation_save']);
Route::post('add-empanelment-deputation/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'empanelment_deputation_update']);
Route::get('empanelment-deputation-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'empanelment_deputation_delete']);

#Cadre Restructuring 2018
Route::get('add-cadre-restructuring-2018/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'cadre_restructuring_2018_view']);
Route::post('add-cadre-restructuring-2018', [App\Http\Controllers\Admin\HRM1Controller::class, 'cadre_restructuring_2018_save']);
Route::post('add-cadre-restructuring-2018/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'cadre_restructuring_2018_update']);
Route::get('cadre-restructuring-2018-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'cadre_restructuring_2018_delete']);


#Sparrow CBIC
Route::get('add-sparrow-cbic/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'sparrow_cbic_view']);
Route::post('add-sparrow-cbic', [App\Http\Controllers\Admin\HRM1Controller::class, 'sparrow_cbic_save']);
Route::post('add-sparrow-cbic/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'sparrow_cbic_update']);
Route::get('sparrow-cbic-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'sparrow_cbic_delete']);

#Officer Details
Route::get('add-officer-details/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'officer_details_view']);
Route::post('add-officer-details', [App\Http\Controllers\Admin\HRM1Controller::class, 'officer_details_save']);
Route::post('add-officer-details/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'officer_details_update']);
Route::get('officer-details-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'officer_details_delete']);

#Various Communication with Field Formations
Route::get('add-various-communication/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'various_communication_view']);
Route::post('add-various-communication', [App\Http\Controllers\Admin\HRM1Controller::class, 'various_communication_save']);
Route::post('add-various-communication/{id?}', [App\Http\Controllers\Admin\HRM1Controller::class, 'various_communication_update']);
Route::get('various-communication-delete/{id}', [App\Http\Controllers\Admin\HRM1Controller::class, 'various_communication_delete']);

#HRM2 -> Postings & Transfers
Route::get('add-posting-transfer/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'posting_transfer_view']);
Route::post('add-posting-transfer', [App\Http\Controllers\Admin\HRM2Controller::class, 'posting_transfer_save']);
Route::post('add-posting-transfer/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'posting_transfer_update']);
Route::get('posting-transfer-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'posting_transfer_delete']);

#e-Disposition List of Group A IRS (C&IT) Officers
Route::get('add-e-diposition-list/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_diposition_view']);
Route::post('add-e-diposition-list', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_diposition_save']);
Route::post('add-e-diposition-list/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_diposition_update']);
Route::get('e-diposition-list-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_diposition_delete']);

#Sanctioned and Working Strength of Group A IRS (C&IT) Officers
Route::get('add-sanctioned-working/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'sanctioned_working_view']);
Route::post('add-sanctioned-working', [App\Http\Controllers\Admin\HRM2Controller::class, 'sanctioned_working_save']);
Route::post('add-sanctioned-working/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'sanctioned_working_update']);
Route::get('sanctioned-working-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'sanctioned_working_delete']);

#HOP
Route::get('add-hop/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'hop_view']);
Route::post('add-hop', [App\Http\Controllers\Admin\HRM2Controller::class, 'hop_save']);
Route::post('add-hop/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'hop_update']);
Route::get('hop-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'hop_delete']);

#swachhta
Route::get('add-swachhta/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'swachhta_view']);
Route::post('add-swachhta', [App\Http\Controllers\Admin\HRM2Controller::class, 'swachhta_save']);
Route::post('add-swachhta/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'swachhta_update']);
Route::get('swachhta-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'swachhta_delete']);

#Verified Data
Route::get('add-verified_data/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'verified_data_view']);
Route::post('add-verified_data', [App\Http\Controllers\Admin\HRM2Controller::class, 'verified_data_save']);
Route::post('add-verified_data/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'verified_data_update']);
Route::get('verified_data-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'verified_data_delete']);

#Policy
Route::get('add-policy/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'policy_view']);
Route::post('add-policy', [App\Http\Controllers\Admin\HRM2Controller::class, 'policy_save']);
Route::post('add-policy/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'policy_update']);
Route::get('policy-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'policy_delete']);

#Empolyee code
Route::get('add-empolyee_code/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'employee_code_view']);
Route::post('add-empolyee_code', [App\Http\Controllers\Admin\HRM2Controller::class, 'employee_code_save']);
Route::post('add-empolyee_code/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'employee_code_update']);
Route::get('empolyee_code-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'employee_code_delete']);

#Various communication
Route::get('add-various_communication/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'communication_view']);
Route::post('add-various_communication', [App\Http\Controllers\Admin\HRM2Controller::class, 'communication_save']);
Route::post('add-various_communication/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'communication_update']);
Route::get('various_communication-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'communication_delete']);

#Tender Notice
Route::get('add-tender_notice/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'tender_notice_view']);
Route::post('add-tender_notice', [App\Http\Controllers\Admin\HRM2Controller::class, 'tender_notice_save']);
Route::post('add-tender_notice/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'tender_notice_update']);
Route::get('tender_notice-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'tender_notice_delete']);

#Module Update
Route::get('add-module_update/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'module_updates_view']);
Route::post('add-module_update', [App\Http\Controllers\Admin\HRM2Controller::class, 'module_updates_save']);
Route::post('add-module_update/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'module_updates_update']);
Route::get('module_update-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'module_updates_delete']);

#Group A IRS (C&IT) Officers on Deputation
Route::get('add-irs/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'irs_view']);
Route::post('add-irs', [App\Http\Controllers\Admin\HRM2Controller::class, 'irs_save']);
Route::post('add-irs/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'irs_update']);
Route::get('irs-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'irs_delete']);

#E Vacency module update
Route::get('add-e_vacency/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_vacency_view']);
Route::post('add-e_vacency', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_vacency_save']);
Route::post('add-e_vacency/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_vacency_update']);
Route::get('e_vacency-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'e_vacency_delete']);

#DPC module update
Route::get('add-dpc/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'dpc_view']);
Route::post('add-dpc', [App\Http\Controllers\Admin\HRM2Controller::class, 'dpc_save']);
Route::post('add-dpc/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'dpc_update']);
Route::get('dpc-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'dpc_delete']);

#civil
Route::get('add-civil/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'civil_view']);
Route::post('add-civil', [App\Http\Controllers\Admin\HRM2Controller::class, 'civil_save']);
Route::post('add-civil/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'civil_update']);
Route::get('civil-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'civil_delete']);

Route::get('add-half/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'half_view']);
Route::post('add-half', [App\Http\Controllers\Admin\HRM2Controller::class, 'half_save']);
Route::post('half/{id?}', [App\Http\Controllers\Admin\HRM2Controller::class, 'half_update']);
Route::get('half-delete/{id}', [App\Http\Controllers\Admin\HRM2Controller::class, 'half_delete']);

#Infrastructure->Infra_OfficerDetails
Route::get('add-infra_officer-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'Infra_officer_details_view']);
Route::post('add-infra_officer-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'Infra_officer_details_save']);
Route::post('add-infra_officer-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'Infra_officer_details_update']);
Route::get('infra_officer-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'Infra_officer_details_delete']);

#Infrastructure->Instruction
Route::get('add-instructions-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'instructions_view']);
Route::post('add-instructions-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'instructions_save']);
Route::post('add-instructions-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'instructions_update']);
Route::get('instructions-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'instructions_delete']);

#Infrastructure->FastTrack
Route::get('add-fast_track-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'fastTrack_view']);
Route::post('add-fast_track-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'fastTrack_save']);
Route::post('add-fast_track-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'fastTrack_update']);
Route::get('fast_track-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'fastTrack_delete']);

#Infrastructure->Ppts
Route::get('add-ppt-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'ppt_view']);
Route::post('add-ppt-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'ppt_save']);
Route::post('add-ppt-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'ppt_update']);
Route::get('ppt-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'ppt_delete']);

#Infrastructure->Manuals
Route::get('add-manual-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'manual_view']);
Route::post('add-manual-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'manual_save']);
Route::post('add-manual-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'manual_update']);
Route::get('manual-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'manual_delete']);

#Infrastructure->Aseet Registers
Route::get('add-asset_register-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'asset_register_view']);
Route::post('add-asset_register-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'asset_register_save']);
Route::post('add-asset_register-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'asset_register_update']);
Route::get('asset_register-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'asset_register_delete']);

#Infrastructure->Aseet Registers
Route::get('add-land_assets-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'land_asset_view']);
Route::post('add-land_assets-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'land_asset_save']);
Route::post('add-land_assets-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'land_asset_update']);
Route::get('land_assets-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'land_asset_delete']);

#Infrastructure->Construction
Route::get('add-construction-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'construction_view']);
Route::post('add-construction-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'construction_save']);
Route::post('add-construction-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'construction_update']);
Route::get('construction-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'construction_delete']);

#Infrastructure->Repair and Maintenance
Route::get('add-repair_maintenance-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'repair_maintenance_view']);
Route::post('add-repair_maintenance-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'repair_maintenance_save']);
Route::post('add-repair_maintenance-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'repair_maintenance_update']);
Route::get('repair_maintenance-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'repair_maintenance_delete']);


#Infrastructure->Ready Built Accommodation
Route::get('add-ready_built-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'ready_built_view']);
Route::post('add-ready_built-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'ready_built_save']);
Route::post('add-ready_built-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'ready_built_update']);
Route::get('ready_built-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'ready_built_delete']);

#Infrastructure-> Hired office Bulidings
Route::get('add-hired_office-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'hired_office_view']);
Route::post('add-hired_office-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'hired_office_save']);
Route::post('add-hired_office-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'hired_office_update']);
Route::get('hired_office-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'hired_office_delete']);

#Infrastructure-> various Communication with Field Formations
Route::get('add-various_coomunication-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'Various_communication_view']);
Route::post('add-various_coomunication-details', [App\Http\Controllers\Admin\InfrastructureController::class, 'Various_communication_save']);
Route::post('add-various_coomunication-details/{id?}', [App\Http\Controllers\Admin\InfrastructureController::class, 'Various_communication_update']);
Route::get('various_coomunication-details-delete/{id}', [App\Http\Controllers\Admin\InfrastructureController::class, 'Various_communication_delete']);

#Welfare-> Officer detailes
Route::get('add-welfare_officer-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'welfare_officer_view']);
Route::post('add-welfare_officer-details', [App\Http\Controllers\Admin\welfareController::class, 'welfare_officer_save']);
Route::post('add-werfare_officer-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_officer_update']);
Route::get('welfare_officer-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_officer_delete']);

#Welfare-> Compendium
Route::get('add-compendium-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'compendium_view']);
Route::post('add-compendium-details', [App\Http\Controllers\Admin\welfareController::class, 'compendium_save']);
Route::post('add-compendium-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'compendium_update']);
Route::get('compendium-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'compendium_delete']);

#Welfare-> Welfare Schemes
Route::get('add-welfare_sechemes-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'welfare_schemes_view']);
Route::post('add-welfare_sechemes-details', [App\Http\Controllers\Admin\welfareController::class, 'welfare_schemes_save']);
Route::post('add-welfare_sechemes-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_schemes_update']);
Route::get('welfare_sechemes-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_schemes_delete']);


#Welfare-> Action Planes
Route::get('add-action_plan-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'action_plan_view']);
Route::post('add-action_plan-details', [App\Http\Controllers\Admin\welfareController::class, 'action_plan_save']);
Route::post('add-action_plan-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'action_plan_update']);
Route::get('action_plan-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'action_plan_delete']);

#Welfare-> Schemes
Route::get('add-schemes-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'schemes_view']);
Route::post('add-schemes-details', [App\Http\Controllers\Admin\welfareController::class, 'schemes_save']);
Route::post('add-schemes-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'schemes_update']);
Route::get('schemes-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'schemes_delete']);

#Welfare-> Welfare PPT
Route::get('add-welfare_ppt-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'welfare_ppt_view']);
Route::post('add-welfare_ppt-details', [App\Http\Controllers\Admin\welfareController::class, 'welfare_ppt_save']);
Route::post('add-welfare_ppt-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_ppt_update']);
Route::get('welfare_ppt-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_ppt_delete']);

#Welfare-> Welfare Manual
Route::get('add-welfare_manual-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'welfare_manual_view']);
Route::post('add-welfare_manual-details', [App\Http\Controllers\Admin\welfareController::class, 'welfare_manual_save']);
Route::post('add-welfare_manual-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_manual_update']);
Route::get('welfare_manual-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_manual_delete']);

#Welfare-> Comman Facilities
Route::get('add-comman_facilties-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'comman_facilties_view']);
Route::post('add-comman_facilties-details', [App\Http\Controllers\Admin\welfareController::class, 'comman_facilties_save']);
Route::post('add-comman_facilties-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'comman_facilties_update']);
Route::get('comman_facilties-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'comman_facilties_delete']);

#Welfare-> Hotel TieUps
Route::get('add-hotel_tieup-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'hotel_tieup_view']);
Route::post('add-hotel_tieup-details', [App\Http\Controllers\Admin\welfareController::class, 'hotel_tieup_save']);
Route::post('add-hotel_tieup-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'hotel_tieup_update']);
Route::get('hotel_tieup-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'hotel_tieup_delete']);

#Welfare-> List of draft Hotels
Route::get('add-hotel_draft-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'hotel_draft_view']);
Route::post('add-hotel_draft-details', [App\Http\Controllers\Admin\welfareController::class, 'hotel_draft_save']);
Route::post('add-hotel_draft-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'hotel_draft_update']);
Route::get('hotel_draft-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'hotel_draft_delete']);

#Welfare-> Departamental Guest House
Route::get('add-guest_house-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'guest_house_view']);
Route::post('add-guest_house-details', [App\Http\Controllers\Admin\welfareController::class, 'guest_house_save']);
Route::post('add-guest_house-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'guest_house_update']);
Route::get('guest_house-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'guest_house_delete']);

#Welfare-> Covid 19
Route::get('add-covid-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'covid_view']);
Route::post('add-covid-details', [App\Http\Controllers\Admin\welfareController::class, 'covid_save']);
Route::post('add-covid-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'covid_update']);
Route::get('covid-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'covid_delete']);

#Welfare-> Welfare praposels
Route::get('add-praposels-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'proposels_view']);
Route::post('add-praposels-details', [App\Http\Controllers\Admin\welfareController::class, 'proposels_save']);
Route::post('add-praposels-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'proposels_update']);
Route::get('praposels-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'proposels_delete']);

#Welfare-> Various Communication with Field Formatation
Route::get('add-welfare_communication-details/{id?}', [App\Http\Controllers\Admin\WelfareController::class, 'welfare_communication_view']);
Route::post('add-welfare_communication-details', [App\Http\Controllers\Admin\welfareController::class, 'welfare_communication_save']);
Route::post('add-welfare_communication-details/{id?}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_communication_update']);
Route::get('welfare_communication-details-delete/{id}', [App\Http\Controllers\Admin\welfareController::class, 'welfare_communication_delete']);

#EMC-> Officer detailes
Route::get('add-emc_officer-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_officer_view']);
Route::post('add-emc_officer-details', [App\Http\Controllers\Admin\EmcController::class, 'emc_officer_save']);
Route::post('add-emc_officer-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_officer_update']);
Route::get('emc_officer-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'emc_Officer_delete']);

#EMC-> Fund Allocation and Utilization
Route::get('add-fund_allocation-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'fund_allocation_view']);
Route::post('add-fund_allocation-details', [App\Http\Controllers\Admin\EmcController::class, 'fund_allocation_save']);
Route::post('add-fund_allocation-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'fund_allocation_update']);
Route::get('fund_allocation-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'fund_allocation_delete']);

#EMC-> Emc PPT
Route::get('add-emc_ppt-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_ppt_view']);
Route::post('add-emc_ppt-details', [App\Http\Controllers\Admin\EmcController::class, 'emc_ppt_save']);
Route::post('add-emc_ppt-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_ppt_update']);
Route::get('emc_ppt-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'emc_ppt_delete']);

#EMC-> Emc Manual
Route::get('add-emc_manual-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_manual_view']);
Route::post('add-emc_manual-details', [App\Http\Controllers\Admin\EmcController::class, 'emc_manual_save']);
Route::post('add-emc_manual-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_manual_update']);
Route::get('emc_manual-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'emc_manual_delete']);

#EMC-> BudgetaryAuthority
Route::get('add-budgetary_authority-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'budgetary_authority_view']);
Route::post('add-budgetary_authority-details', [App\Http\Controllers\Admin\EmcController::class, 'budgetary_authority_save']);
Route::post('add-budgetary_authority-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'budgetary_authority_update']);
Route::get('budgetary_authority-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'budgetary_authority_delete']);

#EMC-> GeM/E Procurement
Route::get('add-gem_eprocurements-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'gem_eprocurements_view']);
Route::post('add-gem_eprocurements-details', [App\Http\Controllers\Admin\EmcController::class, 'gem_eprocurements_save']);
Route::post('add-gem_eprocurements-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'gem_eprocurements_update']);
Route::get('gem_eprocurements-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'gem_eprocurements_delete']);

#EMC-> Vehicle Policies
Route::get('add-vehicle_policy-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'vehicle_policy_view']);
Route::post('add-vehicle_policy-details', [App\Http\Controllers\Admin\EmcController::class, 'vehicle_policy_save']);
Route::post('add-vehicle_policy-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'vehicle_policy_update']);
Route::get('vehicle_policy-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'vehicle_policy_delete']);

#EMC-> CRB
Route::get('add-crb-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'crb_view']);
Route::post('add-crb-details', [App\Http\Controllers\Admin\EmcController::class, 'crb_save']);
Route::post('add-crb-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'crb_update']);
Route::get('crb-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'crb_delete']);

#EMC-> various communication with field formatations
Route::get('add-emc_communication-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_communication_view']);
Route::post('add-emc_communication-details', [App\Http\Controllers\Admin\EmcController::class, 'emc_communication_save']);
Route::post('add-emc_communication-details/{id?}', [App\Http\Controllers\Admin\EmcController::class, 'emc_communication_update']);
Route::get('emc_communication-details-delete/{id}', [App\Http\Controllers\Admin\EmcController::class, 'emc_communication_delete']);


#cbic cocid responce-> Shradhamjali
Route::get('add-shrdhanjali-details/{id?}', [App\Http\Controllers\Admin\CovidResponceController::class, 'shraddhanajli_view']);
Route::post('add-shrdhanjali-details', [App\Http\Controllers\Admin\CovidResponceController::class, 'shraddhanajli_save']);
Route::post('add-shrdhanjali-details/{id?}', [App\Http\Controllers\Admin\CovidResponceController::class, 'shraddhanajli_update']);
Route::get('shrdhanjali-details-delete/{id}', [App\Http\Controllers\Admin\CovidResponceController::class, 'shraddhanajli_delete']);


#Gallery
Route::get('gallery/{id?}', [App\Http\Controllers\Admin\GalleryController::class, 'gallery_view'])->name('gallery');
Route::post('gallery', [App\Http\Controllers\Admin\GalleryController::class, 'gallery_save']);
Route::post('gallery/{id?}', [App\Http\Controllers\Admin\GalleryController::class, 'gallery_update']);
Route::get('gallery-details-delete/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'gallery_delete']);

});

});
});





#WEBSITE
Route::group(['middleware' => 'FrameHeader'], function () {
});

Route::get('/manuals', [App\Http\Controllers\website\IndexController::class, 'manuals']);
Route::get('/photo-gallery', [App\Http\Controllers\website\IndexController::class, 'gallery']);
Route::get('/latest-news', [App\Http\Controllers\website\IndexController::class, 'notification']);
Route::get('/', [App\Http\Controllers\website\IndexController::class, 'index']);
Route::get('/infrastructure_projects', [App\Http\Controllers\website\IndexController::class, 'infrastructure_projects']);
Route::get('/suggestion', [App\Http\Controllers\website\IndexController::class, 'suggestion']);



Route::get('/cbic', [App\Http\Controllers\website\AboutController::class, 'cbic']);
Route::get('/who-we-are', [App\Http\Controllers\website\AboutController::class, 'about']);
Route::get('/contact-us', [App\Http\Controllers\website\AboutController::class, 'contact']);
Route::get('/citizen', [App\Http\Controllers\website\AboutController::class, 'citizen']);


Route::get('/online-writing', [App\Http\Controllers\website\Hrm1Controller::class, 'online_writing']);
Route::get('/sparrow/{tab}', [App\Http\Controllers\website\Hrm1Controller::class,'showSparrowContent'])->name('sparrow.content');
Route::get('/apar', [App\Http\Controllers\website\Hrm1Controller::class, 'apar_missing']);
Route::get('/group_a/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'group_a'])->name('group_a');
Route::get('/group_b/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'group_b'])->name('group_b');
Route::get('/group_c/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'group_c'])->name('group_c');
Route::get('/canteen_staff/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'canteen'])->name('canteen');
Route::get('/cbn/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'cbn'])->name('cbn');
Route::get('/crcl/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'crcl'])->name('crcl');
Route::get('/dgpm/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'dgpm'])->name('dgpm');
Route::get('/director_of_logicstics/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'dol'])->name('dol');
Route::get('/dppr/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'dppr'])->name('dppr');
Route::get('/dri/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'dri'])->name('dri');
Route::get('/rrs_of_directorates/{subTabId}', [App\Http\Controllers\website\Hrm1Controller::class, 'rrs_of_directorates'])->name('rrod');
Route::get('/data_and _telecommunication/{tab}', [App\Http\Controllers\website\Hrm1Controller::class,'telecommunication'])->name('telecommunication');
Route::get('/seniorty_list', [App\Http\Controllers\website\Hrm1Controller::class, 'seniorty_list']);
Route::get('/empanelment_deputation', [App\Http\Controllers\website\Hrm1Controller::class, 'empanelment_deputation']);
Route::get('/dpc/{tab}', [App\Http\Controllers\website\Hrm1Controller::class,'dpc'])->name('dpc');
Route::get('/sparrow-help_desk', [App\Http\Controllers\website\Hrm1Controller::class, 'help_desk']);
Route::get('/cadre_restructuring', [App\Http\Controllers\website\Hrm1Controller::class, 'cadre_restructuring']);
Route::get('/officer_detailes', [App\Http\Controllers\website\Hrm1Controller::class, 'officer_detailes']);
Route::get('/sparrow_cbic', [App\Http\Controllers\website\Hrm1Controller::class, 'cbic']);
Route::get('/various_communication', [App\Http\Controllers\website\Hrm1Controller::class, 'various']);
Route::get('/posting_transfers', [App\Http\Controllers\website\Hrm2Controller::class, 'posting_transfers']);
Route::get('/e_diposition', [App\Http\Controllers\website\Hrm2Controller::class, 'e_diposition']);
Route::get('/hop', [App\Http\Controllers\website\Hrm2Controller::class, 'hop']);
Route::get('/empolyee_code', [App\Http\Controllers\website\Hrm2Controller::class, 'empolyee_code']);
Route::get('/sanctioned-working', [App\Http\Controllers\website\Hrm2Controller::class, 'sanctioned_working']);
Route::get('/v_communication', [App\Http\Controllers\website\Hrm2Controller::class, 'v_communication']);
Route::get('/tender_notice', [App\Http\Controllers\website\Hrm2Controller::class, 'tender_notice']);
Route::get('/swachhta/{tab}', [App\Http\Controllers\website\Hrm2Controller::class,'swachhta'])->name('swachhta');
Route::get('/verified_data/{tab}', [App\Http\Controllers\website\Hrm2Controller::class,'verified'])->name('verified');
Route::get('/module_updates', [App\Http\Controllers\website\Hrm2Controller::class, 'module_updates']);
Route::get('/irs_officers', [App\Http\Controllers\website\Hrm2Controller::class, 'irs_officer']);
Route::get('/e_vacency', [App\Http\Controllers\website\Hrm2Controller::class, 'e_vacency']);
Route::get('/dpc_module', [App\Http\Controllers\website\Hrm2Controller::class, 'dpc_module']);
Route::get('/policy/{tab}', [App\Http\Controllers\website\Hrm2Controller::class,'policy'])->name('policy');
Route::get('/civil_list', [App\Http\Controllers\website\Hrm2Controller::class, 'civil_list']);
Route::get('/half_yearly_brochure', [App\Http\Controllers\website\Hrm2Controller::class, 'half_yearly_brochure']);



Route::get('/infra_officer_detailes', [App\Http\Controllers\website\InfrastructureController::class, 'infra_officer']);
Route::get('/instructions_details', [App\Http\Controllers\website\InfrastructureController::class, 'instrustion']);
Route::get('/fast_track', [App\Http\Controllers\website\InfrastructureController::class, 'fast_track']);
Route::get('/infra_ppt', [App\Http\Controllers\website\InfrastructureController::class, 'infra_ppt']);
Route::get('/infra_manual', [App\Http\Controllers\website\InfrastructureController::class, 'infra_manual']);
Route::get('/asset_register', [App\Http\Controllers\website\InfrastructureController::class, 'asset_register']);
Route::get('/land_assets', [App\Http\Controllers\website\InfrastructureController::class, 'land_assets']);
Route::get('/construction', [App\Http\Controllers\website\InfrastructureController::class, 'construction']);
Route::get('/repair_maintainence', [App\Http\Controllers\website\InfrastructureController::class, 'repair_maintainence']);
Route::get('/ready_built', [App\Http\Controllers\website\InfrastructureController::class, 'ready_built']);
Route::get('/hired_office', [App\Http\Controllers\website\InfrastructureController::class, 'hired_office']);
Route::get('/infra_various_communication', [App\Http\Controllers\website\InfrastructureController::class, 'infra_various_communication']);








Route::get('/welfare_officer', [App\Http\Controllers\website\WelfareController::class, 'welfare_officer']);
Route::get('/compendium', [App\Http\Controllers\website\WelfareController::class, 'compendium']);
Route::get('/welfare_schems', [App\Http\Controllers\website\WelfareController::class, 'welfare_schems']);
Route::get('/action_plan', [App\Http\Controllers\website\WelfareController::class, 'action_plan']);
Route::get('/schemes', [App\Http\Controllers\website\WelfareController::class, 'schemes']);
Route::get('/welfare_ppt', [App\Http\Controllers\website\WelfareController::class, 'welfare_ppt']);
Route::get('/welfare_manual', [App\Http\Controllers\website\WelfareController::class, 'welfare_manual']);
Route::get('/comman_facilities', [App\Http\Controllers\website\WelfareController::class, 'comman_facilities']);
Route::get('/hotel_tie_up', [App\Http\Controllers\website\WelfareController::class, 'tie_up']);
Route::get('/draft_hotels', [App\Http\Controllers\website\WelfareController::class, 'draft']);
Route::get('/guest_house', [App\Http\Controllers\website\WelfareController::class, 'guest_house']);
Route::get('/covid', [App\Http\Controllers\website\WelfareController::class, 'covid']);
Route::get('/welfare_praposals', [App\Http\Controllers\website\WelfareController::class, 'welfare_praposals']);
Route::get('/welfare_communication', [App\Http\Controllers\website\WelfareController::class, 'welfare_communication']);








Route::get('/emc_officer', [App\Http\Controllers\website\EmcController::class, 'emc_officer']);
Route::get('/fund_allocation', [App\Http\Controllers\website\EmcController::class, 'fund_allocation']);
Route::get('/emc_ppt', [App\Http\Controllers\website\EmcController::class, 'emc_ppt']);
Route::get('/emc_manual', [App\Http\Controllers\website\EmcController::class, 'emc_manual']);
Route::get('/budgetary_authority', [App\Http\Controllers\website\EmcController::class, 'budgetary_authority']);
Route::get('/gem_eprocurements', [App\Http\Controllers\website\EmcController::class, 'gem_eprocurements']);
Route::get('/vehicle_policy', [App\Http\Controllers\website\EmcController::class, 'vehicle_policy']);
Route::get('/crb', [App\Http\Controllers\website\EmcController::class, 'crb']);
Route::get('/emc_communication', [App\Http\Controllers\website\EmcController::class, 'emc_communication']);
Route::get('/shrdhanjali', [App\Http\Controllers\website\CbicController::class, 'shrdhanjali']);


























