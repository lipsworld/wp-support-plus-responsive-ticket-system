<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $wpdb;
$customFields=$wpdb->get_results( "SELECT * FROM {$wpdb->prefix}wpsp_custom_fields" );
$wpsp_delete_ticket=get_option('wpsp_et_delete_ticket');
$notify_to=array(
        'customer'=>'1',
        'administrator'=>'1',
        'supervisor'=>'1',
        'assigned_agent'=>'1',
        'all_agents'=>'0'
);
$templates=array(
    'customer_name' => __("Customer Name", 'wp-support-plus-responsive-ticket-system' ).__("(ticket creator)", 'wp-support-plus-responsive-ticket-system' ),
    'customer_email' => __("Customer Email", 'wp-support-plus-responsive-ticket-system' ).__("(ticket creator)", 'wp-support-plus-responsive-ticket-system' ),
    'ticket_id' => __("Ticket ID", 'wp-support-plus-responsive-ticket-system' ),
    'ticket_subject' => __("Ticket Subject", 'wp-support-plus-responsive-ticket-system' ),
    'ticket_description' => __("Ticket Description", 'wp-support-plus-responsive-ticket-system' ),
    'ticket_status' => __("Ticket Status", 'wp-support-plus-responsive-ticket-system' ),
    'ticket_category' => __("Ticket Category", 'wp-support-plus-responsive-ticket-system' ),
    'ticket_priority' => __("Ticket Priority", 'wp-support-plus-responsive-ticket-system' ),
    'updated_by'=>__("User who assigned ticket", 'wp-support-plus-responsive-ticket-system' ),
    'time_created'=>__("Ticket Created", 'wp-support-plus-responsive-ticket-system' )
);
foreach($customFields as $field){
    $templates['cust'.$field->id]=$field->label;
}
if(isset($wpsp_delete_ticket['mail_subject'])){
    $wpsp_delete_ticket['mail_subject']='{updated_by} deleted ticket #{ticket_id}';
    update_option('wpsp_et_delete_ticket',$wpsp_delete_ticket);
}
if(isset($wpsp_delete_ticket['mail_body'])){
    $wpsp_delete_ticket['mail_body']='<strong>Below ware details of ticket:</strong><br />
                    <br />
                    ------------------------------------------------------------------------------------------------------------------------------------<br />
                    <strong>Subject:</strong> {ticket_subject}<br />
                    <strong>Status:</strong> {ticket_status}<br />
                    <strong>Category:</strong> {ticket_category}<br />
                    <strong>Priority:</strong> {ticket_priority}<br />
                    ------------------------------------------------------------------------------------------------------------------------------------<br />
                    <strong>Description:</strong><br />
                    {ticket_description}';
    update_option('wpsp_et_delete_ticket',$wpsp_delete_ticket);
}
if(isset($wpsp_delete_ticket['templates'])){
    $wpsp_delete_ticket['templates']=$templates;
    update_option('wpsp_et_delete_ticket',$wpsp_delete_ticket);
}
if(isset($wpsp_delete_ticket['notify_to'])){
    $wpsp_delete_ticket['notify_to']=$notify_to;
    update_option('wpsp_et_delete_ticket',$wpsp_delete_ticket);
}
?>