<?php

/*
Plugin Name: BPMContext - Client Suite
Plugin URI: http://bpmcontext.com
Description: Secure file sharing and customer collaboration suite for use with BPMContext
Version: 3.1.12
Author: BPMContext
Author URI: http://bpmcontext.com
License: GPLv2+ or later
Text Domain: bpmcontext
*/


global $bpm_sdk_version , $bpm_server_info;

$bpm_server_info['bpm_server']      = 'bpm.bpmcontext.com';
$bpm_server_info['bpm_api']         = 'api_v3_1_9';
$bpm_server_info['bpm_marketing']   = 'bpmcontext.com';
$bpm_this_sdk_version = 320;

if( $bpm_this_sdk_version > $bpm_sdk_version ) $bpm_sdk_version = $bpm_this_sdk_version ;

update_option('bpmcontext-client-suite-sdk',$bpm_this_sdk_version);

add_action('admin_init', 'bpm_client_suite_load_sdk' , 1 );
add_action('init', 'bpm_client_suite_load_sdk' , 1 );

function bpm_client_suite_load_sdk(){

    if ( ! function_exists( 'get_plugins' ) ) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }

    $plugins = get_plugins();

    if( is_plugin_active( 'bpmcontext/bpmcontext.php' ) ) {
        if (isset($plugins['bpmcontext/bpmcontext.php'])) {
            $version = $plugins['bpmcontext/bpmcontext.php']['Version'];
            $version = explode('.',$version);

            if($version[0] < 3){
                //add message to the user
                deactivate_plugins('bpmcontext/bpmcontext.php');

            }
        }
    }

    global $bpm_sdk_version, $bpm_sdk;

    $bpm_this_sdk_version = get_option('bpmcontext-client-suite-sdk');

    if($bpm_this_sdk_version >=  $bpm_sdk_version) {

        require_once 'includes/bpm-sdk/start.php';

        if( ! $bpm_sdk ) {

            $bpm_sdk = new bpmcontext_sdk_manager();
            $bpm_sdk->bpm_load_actions();
        }

    }

}

/**
 * add Contact Plus features
 */

add_action('init', 'bpm_client_suite_load_contact_plus'  );

function bpm_client_suite_load_contact_plus(){

    if ( ! function_exists( 'get_plugins' ) ) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }

    $plugins = get_plugins();

    if(! class_exists('bpmcontext_contact_form_grid')) {
        require_once 'includes/bpmcontext-form-grid-list-class.php';
        require_once 'includes/bpmcontext-form-grid-list-plugins.php';
        require_once 'includes/bpmcontext-form-grid-list-features.php';
        require_once 'includes/bpmcontext-form-grid-list-activity.php';
        require_once 'includes/bpmcontext-form-handler-functions.php';
        require_once 'includes/bpmcontext-form-manager-class.php';
        require_once 'includes/bpmcontext_contact_form_handler.php';
        require_once 'includes/bpmcontext_contact_us.php';
        require_once 'bpmcontext-contact-plus-functions.php';
        if (!isset($allowed_plugins_array)) $allowed_plugins_array = array();
    }
}

/**
 * start of bpmcontext sdk setup
 */
global $bpm_solution_sets;
$bpm_solution_sets['bpm_client_suite'] = 5;

global $bpm_plugin_name;
$bpm_plugin_name = 'Client Suite';

global $bpm_right_boxes;
$bpm_right_boxes['event_data']  = array('name'=>'event_data');
$bpm_right_boxes['infobox']     = array('name'=>'infobox');
$bpm_right_boxes['tutorial']    = array('name'=>'tutorial');
$bpm_right_boxes['cust_supp']   = array('name'=>'cust_supp');
$bpm_right_boxes['subscribers'] = array('name'=>'subscribers');
$bpm_right_boxes['history']     = array('name'=>'history');
$bpm_right_boxes['sharing']     = array('name'=>'sharing');
$bpm_right_boxes['changelog']   = array('name'=>'changelog');

global $bpm_home_page_widgets;
$bpm_home_page_widgets['promoted']      = array('name'=>'promoted', 'title' => 'Newsfeed');
$bpm_home_page_widgets['calendar']      = array('name'=>'calendar', 'title' => 'Calendar');
$bpm_home_page_widgets['directory']     = array('name'=>'directory', 'width'=>2, 'title'=>'Employee Directory');
$bpm_home_page_widgets['recent']        = array('name'=>'recent', 'width'=>1, 'title'=>'Recent Changes');
$bpm_home_page_widgets['notifications'] = array('name'=>'notifications', 'width'=>1 , 'title'=>'Notifications');
$bpm_home_page_widgets['bookmarks']     = array('name'=>'bookmarks', 'width'=>1 , 'title' => 'Bookmarks');
$bpm_home_page_widgets['subscriptions'] = array('name'=>'subscriptions', 'width'=>1 , 'title'=>'Subscriptions');
$bpm_home_page_widgets['myhistory']     = array('name'=>'myhistory', 'width'=>1, 'title'=>'My History');

global $bpm_site_type_token;
$bpm_site_type_token = 'f990d185-e7bf-11e4-b43f-878uytmn-1d9ca0';

global $bpm_left_menu;

global $bpm_onboarding;

global $admin_menu_items;

$bpm_workspace_widgets[] = array( 'position' => 1, 'icon' => 'fa fa-paper-plane-o' , 'name' => 'Manage Inquiry', 'callback' => 'bpmcontext_context_plus.bpm_load_contact_inquiry_manager', 'id' => 'bpm_load_contact_inquiry_manager', 'title' => 'Manage Inquiry', 'width' => 2, 'height' => '60em', 'template_library_id' => 157, 'domain'=> null);
$bpm_workspace_widgets[] = array( 'position' => 1, 'icon' => 'fa fa-paper-plane-o' , 'name' => 'Manage Inquiry', 'callback' => 'bpmcontext_context_plus.bpm_load_contact_inquiry_manager', 'id' => 'bpm_load_contact_inquiry_manager', 'title' => 'Manage Inquiry', 'width' => 2, 'height' => '60em', 'template_library_id' => 164, 'domain'=> null);
$bpm_workspace_widgets[] = array( 'position' => 1, 'icon' => 'fa fa-envelope-o' , 'name' => 'Inquiry Emails', 'callback' => 'bpmcontext_context_plus.bpm_load_contact_inquiry_manager_emals', 'id' => 'bpm_load_contact_inquiry_manager_emails', 'title' => 'Inquiry Emails', 'width' => 2, 'height' => '60em', 'template_library_id' => 157, 'domain'=> null);

$bpm_right_boxes['contactform'] = array('name'=>'contactform');

$bpm_home_page_widgets['custom'][] = array('name'=>'custom' , 'callback'=>'bpmcontext_context_plus.bpm_contact_form_get_map_widget', 'id'=>'bpm_homepage_form_map', 'title'=>'Contact Form Map for All Inquiries', 'width'=>2);

$admin_menu_items[] = array('name' => __('Contact Plus',''),
                     'title' => __('Contact Plus','bpm_intranet_plus'),
                     'user_rights' => 'manage_options',
                     'page_slug' => 'bpm_form_options',
                     'callback' => 'bpm_contact_form_display_options');

global $bpm_first_redirect;
$bpm_first_redirect = 'bpm_options';

/**
 * end of bpmcontext sdk setup
 */


add_action( 'admin_init', 'bpm_client_suite_redirect');

//Activate then redirect to the contact plus page
register_activation_hook( __FILE__, 'bpm_client_suite_activate' );
function bpm_client_suite_activate() {
    global $bpm_first_redirect;

	update_option( 'bpm_activation_redirect', true );
    update_option('reactivate', 1);
    update_option('bpm_redirect_to', $bpm_first_redirect);
}

function bpm_client_suite_redirect() {
    if (get_option('bpm_activation_redirect', false)) {
        delete_option('bpm_activation_redirect');
        if ( ! is_multisite() ) {
            wp_redirect("admin.php?page=bpm_options");
            exit;
        }
    }
}

// Add settings link on plugin page
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'bpm_client_suite_settings_link' );
function bpm_client_suite_settings_link($links) {

    $settings_link = '<a href="https://support.bpmcontext.com" target="_blank">'.__('Support Site', 'bpmcontext').'</a>';
    array_unshift($links, $settings_link);
    $settings_link = '<a href="admin.php?page=bpm_options">Settings</a>';
    array_unshift($links, $settings_link);
    return $links;
}
?>