<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

do_action('wpsp_before_actions_loaded');

if (is_admin()) {
    
    include_once ( WCE_PLUGIN_DIR.'includes/admin/ajax.php' );
    $ajax=new SupportPlusAjax();
    $GLOBALS['SupportPlusAjax'] =$ajax;
    add_action( 'wp_ajax_createNewTicket', array( $ajax, 'createNewTicket' ) );
    add_action( 'wp_ajax_nopriv_createNewTicket', array( $ajax, 'createNewTicket' ) );
    add_action( 'wp_ajax_getTickets', array( $ajax, 'getTickets' ) );
    add_action( 'wp_ajax_getFrontEndTickets', array( $ajax, 'getFrontEndTickets' ) );
    add_action( 'wp_ajax_openTicket', array( $ajax, 'openTicket' ) );
    add_action( 'wp_ajax_openTicketFront', array( $ajax, 'openTicketFront' ) );
    add_action( 'wp_ajax_replyTicket', array( $ajax, 'replyTicket' ) );
    add_action( 'wp_ajax_getAgentSettings', array( $ajax, 'getAgentSettings' ) );
    add_action( 'wp_ajax_setAgentSettings', array( $ajax, 'setAgentSettings' ) );
    add_action( 'wp_ajax_getGeneralSettings', array( $ajax, 'getGeneralSettings' ) );
    add_action( 'wp_ajax_setGeneralSettings', array( $ajax, 'setGeneralSettings' ) );
    add_action( 'wp_ajax_getCategories', array( $ajax, 'getCategories' ) );
    add_action( 'wp_ajax_createNewCategory', array( $ajax, 'createNewCategory' ) );
    add_action( 'wp_ajax_updateCategory', array( $ajax, 'updateCategory' ) );
    add_action( 'wp_ajax_deleteCategory', array( $ajax, 'deleteCategory' ) );
    add_action( 'wp_ajax_getEmailNotificationSettings', array( $ajax, 'getEmailNotificationSettings' ) );
    add_action( 'wp_ajax_setEmailSettings', array( $ajax, 'setEmailSettings' ) );
    add_action( 'wp_ajax_getTicketAssignment', array( $ajax, 'getTicketAssignment' ) );
    add_action( 'wp_ajax_setTicketAssignment', array( $ajax, 'setTicketAssignment' ) );
    add_action( 'wp_ajax_deleteTicket', array( $ajax, 'deleteTicket' ) );
    add_action( 'wp_ajax_cloneTicket', array( $ajax, 'cloneTicket' ));
    add_action( 'wp_ajax_getChangeTicketStatus', array( $ajax, 'getChangeTicketStatus' ) );
    add_action( 'wp_ajax_setChangeTicketStatus', array( $ajax, 'setChangeTicketStatus' ) );
    add_action( 'wp_ajax_nopriv_loginGuestFacebook', array( $ajax, 'loginGuestFacebook' ) );
    add_action( 'wp_ajax_nopriv_getChatOnlineAgents', array( $ajax, 'getChatOnlineAgents' ) );
    add_action( 'wp_ajax_getChatOnlineAgents', array( $ajax, 'getChatOnlineAgents' ) );
    add_action( 'wp_ajax_nopriv_getCallOnlineAgents', array( $ajax, 'getCallOnlineAgents' ) );
    add_action( 'wp_ajax_getCallOnlineAgents', array( $ajax, 'getCallOnlineAgents' ) );
    add_action( 'wp_ajax_getCreateTicketForm', array( $ajax, 'getCreateTicketForm' ) );
    add_action( 'wp_ajax_getCustomSliderMenus', array( $ajax, 'getCustomSliderMenus' ) );
    add_action( 'wp_ajax_addCustomSliderMenu', array( $ajax, 'addCustomSliderMenu' ) );
    add_action( 'wp_ajax_deleteCustomSliderMenu', array( $ajax, 'deleteCustomSliderMenu' ) );
    add_action( 'wp_ajax_nopriv_createNewTicket', array( $ajax, 'createNewTicket' ) );
    add_action( 'wp_ajax_wpspSearchRegisteredUser', array( $ajax, 'searchRegisteredUsaers' ) );
    add_action( 'wp_ajax_getRollManagementSettings', array( $ajax, 'getRollManagementSettings' ) );
    add_action( 'wp_ajax_setRoleManagement', array( $ajax, 'setRoleManagement' ) );
    add_action( 'wp_ajax_getCustomFields', array( $ajax, 'getCustomFields' ) );
    add_action( 'wp_ajax_createNewCustomField', array( $ajax, 'createNewCustomField' ) );
    add_action( 'wp_ajax_updateCustomField', array( $ajax, 'updateCustomField' ) );
    add_action( 'wp_ajax_deleteCustomField', array( $ajax, 'deleteCustomField' ) );
    add_action( 'wp_ajax_getFrontEndFAQ', array( $ajax, 'getFrontEndFAQ' ) );
    add_action( 'wp_ajax_nopriv_getFrontEndFAQ', array( $ajax, 'getFrontEndFAQ' ) );
    add_action( 'wp_ajax_openFrontEndFAQ', array( $ajax, 'openFrontEndFAQ' ) );
    add_action( 'wp_ajax_nopriv_openFrontEndFAQ', array( $ajax, 'openFrontEndFAQ' ) );
    add_action( 'wp_ajax_getFaqCategories', array( $ajax, 'getFaqCategories' ) );
    add_action( 'wp_ajax_createNewFaqCategory', array( $ajax, 'createNewFaqCategory' ) );
    add_action( 'wp_ajax_updateFaqCategory', array( $ajax, 'updateFaqCategory' ) );
    add_action( 'wp_ajax_deleteFaqCategory', array( $ajax, 'deleteFaqCategory' ) );
    add_action( 'wp_ajax_getCustomCSSSettings', array( $ajax, 'getCustomCSSSettings'));
    add_action( 'wp_ajax_setCustomCSSSettings', array( $ajax, 'setCustomCSSSettings'));
    add_action( 'wp_ajax_getAdvancedSettings', array( $ajax, 'getAdvancedSettings'));
    add_action( 'wp_ajax_setAdvancedSettings', array( $ajax, 'setAdvancedSettings'));
    add_action( 'wp_ajax_getCustomStatusSettings', array( $ajax, 'getCustomStatusSettings'));
    add_action( 'wp_ajax_deleteCustomStatus', array( $ajax, 'deleteCustomStatus'));
    add_action( 'wp_ajax_addCustomStatus', array( $ajax, 'addCustomStatus'));
    add_action( 'wp_ajax_setChangeTicketStatusMultiple', array( $ajax, 'setChangeTicketStatusMultiple' ) );
    add_action( 'wp_ajax_setAssignAgentMultiple', array( $ajax, 'setAssignAgentMultiple' ) );
    add_action( 'wp_ajax_deleteTicketMultiple', array( $ajax, 'deleteTicketMultiple' ) );
    add_action( 'wp_ajax_nopriv_wpspCheckLogin', array( $ajax, 'wpspCheckLogin' ) );
    add_action( 'wp_ajax_setCustomStatusColor', array( $ajax, 'setCustomStatusColor'));
    add_action( 'wp_ajax_ticketFromThread', array( $ajax, 'ticketFromThread'));
    add_action( 'wp_ajax_getFieldsReorderSettings', array( $ajax, 'getFieldsReorderSettings'));
    add_action( 'wp_ajax_setFieldsReorderSettings', array( $ajax, 'setFieldsReorderSettings'));
    add_action( 'wp_ajax_getTicketListFieldSettings', array( $ajax, 'getTicketListFieldSettings'));
    add_action( 'wp_ajax_setTicketListFieldSettings', array( $ajax, 'setTicketListFieldSettings'));
    add_action( 'wp_ajax_getCustomFilterFrontEnd', array( $ajax, 'getCustomFilterFrontEnd'));
    add_action( 'wp_ajax_setCustomFilterFrontEnd', array( $ajax, 'setCustomFilterFrontEnd'));
    add_action( 'wp_ajax_getCustomPrioritySettings', array( $ajax, 'getCustomPrioritySettings'));
    add_action( 'wp_ajax_setCustomPrioritySettings', array( $ajax, 'setCustomPrioritySettings'));
    add_action( 'wp_ajax_addCustomPriority', array( $ajax, 'addCustomPriority'));
    add_action( 'wp_ajax_setCustomPriorityColor', array( $ajax, 'setCustomPriorityColor'));
    add_action( 'wp_ajax_deleteCustomPriority', array( $ajax, 'deleteCustomPriority'));
    add_action( 'wp_ajax_setSubCharLength', array( $ajax, 'setSubCharLength'));
    add_action( 'wp_ajax_getETCreateNewTicket', array( $ajax, 'getETCreateNewTicket'));
    add_action( 'wp_ajax_setEtCreateNewTicket', array( $ajax, 'setEtCreateNewTicket'));
    add_action( 'wp_ajax_getETReplayTicket', array( $ajax, 'getETReplayTicket'));
    add_action( 'wp_ajax_setEtReplyTicket', array( $ajax, 'setEtReplyTicket'));
    add_action( 'wp_ajax_getETChangeTicketStatus', array( $ajax, 'getETChangeTicketStatus'));
    add_action( 'wp_ajax_setEtChangeTicketStatus', array( $ajax, 'setEtChangeTicketStatus'));
    add_action( 'wp_ajax_getETAssignAgent', array( $ajax, 'getETAssignAgent'));
    add_action( 'wp_ajax_setETAssignAgent', array( $ajax, 'setETAssignAgent'));
    add_action( 'wp_ajax_getETDeleteTicket', array( $ajax, 'getETDeleteTicket'));
    add_action( 'wp_ajax_setETDeleteTicket', array( $ajax, 'setETDeleteTicket'));
    add_action( 'wp_ajax_setCustomStatusOrder', array( $ajax, 'setCustomStatusOrder'));
    add_action( 'wp_ajax_setCustomPriorityOrder', array( $ajax, 'setCustomPriorityOrder'));
    add_action( 'wp_ajax_setDateFormat', array( $ajax, 'setDateFormat'));
    add_action( 'wp_ajax_updateCustomStatus', array( $ajax, 'updateCustomStatus'));
    add_action( 'wp_ajax_updateCustomPriority', array( $ajax, 'updateCustomPriority'));
    add_action( 'wp_ajax_getTicketRaisedByUser', array( $ajax, 'getTicketRaisedByUser' ) );
    add_action( 'wp_ajax_setTicketRaisedByUser', array( $ajax, 'setTicketRaisedByUser' ) );
    add_action( 'wp_ajax_showcanned', array( $ajax,  'showcanned' ));
    add_action( 'wp_ajax_shareCanned', array( $ajax, 'shareCanned' ) );
    add_action( 'wp_ajax_getCKEditorSettings', array( $ajax,  'getCKEditorSettings' ));
    add_action( 'wp_ajax_setCKEditorSettings', array( $ajax,  'setCKEditorSettings' ));
    add_action( 'wp_ajax_wpspSubmitLinkForm', array( $ajax, 'wpspSubmitLinkForm' ) );
    add_action( 'wp_ajax_nopriv_wpspSubmitLinkForm', array( $ajax, 'wpspSubmitLinkForm' ) );
    add_action( 'wp_ajax_getSupportButton', array( $ajax, 'getSupportButton'));
    add_action( 'wp_ajax_wpsp_image_upload',array($ajax,'image_upload'));
    add_action( 'wp_ajax_closeTicketStatus', array( $ajax, 'closeTicketStatus' ));
    add_action( 'wp_ajax_wpsp_getCatName',array($ajax,'wpsp_getCatName'));
    add_action( 'wp_ajax_get_cat_custom_field',array($ajax,'get_cat_custom_field'));
    add_action( 'wp_ajax_nopriv_get_cat_custom_field',array($ajax,'get_cat_custom_field'));
    add_action( 'wp_ajax_getFrontEndDisplay', array( $ajax, 'getFrontEndDisplay' ));
    add_action( 'wp_ajax_setFrontEndDisplay', array( $ajax, 'setFrontEndDisplay' ));
    add_action( 'wp_ajax_getEditCustomField', array( $ajax, 'getEditCustomField' ));
    add_action( 'wp_ajax_setEditCustomField', array( $ajax, 'setEditCustomField' ));
    add_filter( 'wpsp_check_email_in_ignore_list', array( $ajax, 'check_email_in_ignore_list' ), 10, 3 );
    add_action( 'wp_ajax_getAddOnLicenses',array($ajax,'getAddOnLicenses'));
    add_action( 'wp_ajax_wpsp_act_license',array($ajax,'wpsp_act_license'));
    add_action( 'wp_ajax_wpsp_dact_license',array($ajax,'wpsp_dact_license'));
    add_action( 'wp_ajax_wpsp_check_license',array($ajax,'wpsp_check_license'));
    add_action( 'wp_ajax_wpsp_upload_attachment',array($ajax,'wpsp_upload_attachment'));
    add_action( 'wp_ajax_nopriv_wpsp_upload_attachment',array($ajax,'wpsp_upload_attachment'));
    add_action( 'wp_ajax_wpsp_deleteThread',array($ajax,'deleteThread'));
    add_action( 'wpsp_after_reply_form',array($ajax,'wpsp_submit_reply_confirm_box'));
    add_action( 'wp_ajax_wpsp_get_captcha_token',array($ajax,'wpsp_get_captcha_token'));
    add_action( 'wp_ajax_nopriv_wpsp_get_captcha_token',array($ajax,'wpsp_get_captcha_token'));
    add_action( 'wp_ajax_wpsp_restore_ticket',array($ajax,'wpsp_restore_ticket'));
    add_action( 'wpsp_indivisualticket_backend_button_confirm_messages',array($ajax,'wpsp_indivisualticket_backend_button_confirm_messages'),10,1);
    add_action('wp_ajax_wpsp_add_canned_reply',array($ajax,'wpsp_add_canned_reply'));     
    add_action('wp_ajax_wpsp_setCannedReply',array($ajax,'setCannedReply'));     
    add_action('wp_ajax_wpsp_edit_canned_reply',array($ajax,'wpsp_edit_canned_reply'));     
    add_action('wp_ajax_setEditCannedReply',array($ajax,'setEditCannedReply'));     
    add_action('wp_ajax_wpsp_delete_canned_reply',array($ajax,'wpsp_delete_canned_reply'));
    add_action('wp_ajax_wpsp_edit_thread',array($ajax,'wpsp_edit_thread'));     
    add_action('wp_ajax_setEditThread',array($ajax,'setEditThread'));
    add_action( 'wp_ajax_getTicketStatistics', array( $ajax, 'getTicketStatistics' ) );
    //add_action( 'wp_ajax_wpsp_filter_ticket_list_by_stats', array( $ajax, 'wpsp_filter_ticket_list_by_stats' ) );
    //add_action( 'wp_ajax_nopriv_wpsp_filter_ticket_list_by_stats', array( $ajax, 'wpsp_filter_ticket_list_by_stats' ) );
    add_action( 'wp_ajax_wpspgetFrontDashboardStatistics', array( $ajax, 'wpspgetFrontDashboardStatistics' ) );
    add_action( 'wp_ajax_resetETCreateNewTicket', array( $ajax, 'resetETCreateNewTicket' ) );
    add_action( 'wp_ajax_resetETReplyTicket', array( $ajax, 'resetETReplyTicket' ) );
    add_action( 'wp_ajax_resetETChangeTicketStatus', array( $ajax, 'resetETChangeTicketStatus' ) );
    add_action( 'wp_ajax_resetETAssignAgent', array( $ajax, 'resetETAssignAgent' ) );
    add_action( 'wp_ajax_resetETDeleteTicket', array( $ajax, 'resetETDeleteTicket' ) );
    add_action( 'wp_ajax_setwpspSettingsBackup', array( $ajax, 'setwpspSettingsBackup'));
} else {
    
}

do_action('wpsp_after_actions_loaded');

?>