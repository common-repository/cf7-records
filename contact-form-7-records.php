<?php
/**
 * Plugin Name: Contact form 7 Records
 * Plugin URI: http://myplugin.nexuslinkservices.com
 * Description: This Plugins Saves Contact form 7 Form submission into Database, so, you can Preview. You must install contact form 7 in order to use this plugin
 * Version: 1.0.0
 * Author: NexusLink Services
 * Author URI: http://nexuslinkservices.com
 * License: GPL2
 */

define('WPCF7RECORDS_DIR', realpath(dirname(__FILE__)));
define('WPCF7RECORDS_FILE', realpath(dirname(__FILE__)).'/contact-form-7-records.php');

require_once WPCF7RECORDS_DIR . '/submit-record.php';
require_once WPCF7RECORDS_DIR . '/admin.php';

/**
 * Save the WPCF7RecordSubmissions class for later
 */
function contact_form_record_submissions_init()
{
    global $contact_form_record_submissions;
    $contact_form_record_submissions = new WPCF7RecordSubmissions();
}
add_action('init', 'contact_form_record_submissions_init', 9);

/**
 * Save the WPCF7RAdmin class for later
 */
function contact_form_record_submissions_admin_init()
{
    global $contact_form_record_submissions_admin;
    $contact_form_record_submissions_admin = new WPCF7RecordsAdmin();
}
add_action('admin_init', 'contact_form_record_submissions_admin_init');