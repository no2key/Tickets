<?php
/**
 * Default English Lexicon Entries for Tickets
 */

include_once('setting.inc.php');

$_lang['tickets'] = 'Tickets';
$_lang['comments'] = 'Comments';
$_lang['threads'] = 'Comments threads';
$_lang['tickets_section'] = 'Tickets ticket';
$_lang['ticket'] = 'Ticket';
$_lang['ticket_all'] = 'All tickets';
$_lang['ticket_menu_desc'] = 'Comments management and more.';
$_lang['comments_all'] = 'All comments';

$_lang['tickets_section_create_here'] = 'Section with tickets';
$_lang['tickets_section_new'] = 'New ticket';
$_lang['tickets_section_management'] = 'Tickets management';
$_lang['tickets_section_duplicate'] = 'Duplicate section';
$_lang['tickets_section_unpublish'] = 'Unpublish section';
$_lang['tickets_section_publish'] = 'Publish section';
$_lang['tickets_section_undelete'] = 'Undelete section';
$_lang['tickets_section_delete'] = 'Delete section';
$_lang['tickets_section_view'] = 'View on site';

$_lang['ticket_create_here'] = 'Create ticket';

$_lang['ticket_no_comments'] = 'This page has no comments. You can be a trailblazer.';
$_lang['tickets_message_close_all'] = 'close all';
$_lang['err_no_jevix'] = 'Snippet Jevix is required for proper work. You need to install it from MODX repository.';
$_lang['tickets_err_unknown'] = 'An unknown error occurred.';
$_lang['ticket_err_id'] = 'The ticket with specified id = [[+id]] not found.';
$_lang['ticket_err_wrong_user'] = 'You trying to update a ticket that is not yours.';
$_lang['ticket_err_no_auth'] = 'You need to login to create a ticket.';
$_lang['ticket_err_wrong_parent'] = 'Invalid section for this ticket was specified.';
$_lang['ticket_err_wrong_resource'] = 'Wrong ticket specified.';
$_lang['ticket_err_wrong_thread'] = 'Wrong comments thread specified.';
$_lang['ticket_err_access_denied'] = 'Access denied';
$_lang['ticket_err_form'] = 'Form contains errors. Please, fix it.';
$_lang['ticket_err_deleted_comment'] = 'You trying to edit the deleted comment.';
$_lang['ticket_err_unpublished_comment'] = 'This comment was not published.';
$_lang['ticket_err_ticket'] = 'The specified ticket does not exist.';
$_lang['ticket_err_vote_own'] = 'You cannot vote for your ticket.';
$_lang['ticket_err_vote_already'] = 'You have already voted for this ticket.';
$_lang['ticket_err_empty'] = 'You forgot to write the text of the ticket.';
$_lang['ticket_unpublished_comment'] = 'Your comment will be published after moderation.';
$_lang['permission_denied'] = 'You do not have permissions for this action.';
$_lang['field_required'] = 'This field is required.';
$_lang['ticket_clear'] = 'Clear';

$_lang['ticket_comment_intro'] = '';
$_lang['ticket_comment_all_intro'] = 'Here are comments from the entire site.';
$_lang['ticket_comment_deleted_text'] = 'This comment was deleted.';
$_lang['ticket_comment_update'] = 'Update this comment';
$_lang['ticket_comment_remove'] = 'Remove with children';
$_lang['ticket_comment_remove_confirm'] = 'Are you sure you want to permanently remove <b>comments thread</b>, starting with this? This operation is irreversible!';
$_lang['ticket_comment_delete'] = 'Delete this comment';
$_lang['ticket_comment_undelete'] = 'Restore this comment';
$_lang['ticket_comment_publish'] = 'Publish this comment';
$_lang['ticket_comment_unpublish'] = 'Unpublish this comment';
$_lang['ticket_comment_viewauthor'] = 'Open authors page';

$_lang['ticket_comment_name'] = 'Author';
$_lang['ticket_comment_text'] = 'Comment';
$_lang['ticket_comment_createdon'] = 'Created on';
$_lang['ticket_comment_editedon'] = 'Edited on';
$_lang['ticket_comment_deletedon'] = 'Deleted on';
$_lang['ticket_comment_parent'] = 'Parent';
$_lang['ticket_comment_email'] = 'Email';
$_lang['ticket_comment_view'] = 'View comment on site';
$_lang['ticket_comment_reply'] = 'reply';
$_lang['ticket_comment_edit'] = 'edit';
$_lang['ticket_comment_create'] = 'Write comment';
$_lang['ticket_comment_preview'] = 'Preview';
$_lang['ticket_comment_save'] = 'Write';
$_lang['ticket_comment_was_edited'] = 'Comment was edited';
$_lang['ticket_comment_guest'] = 'Guest';
$_lang['ticket_comment_deleted'] = 'Deleted';
$_lang['ticket_comment_captcha'] = 'Enter the amount [[+a]] + [[+b]]';
$_lang['ticket_comment_err_no_auth'] = 'You need to login to create comments.';
$_lang['ticket_comment_err_wrong_user'] = 'You trying to update a comment that is not yours.';
$_lang['ticket_comment_err_no_time'] = 'Time for editing a comment is ended.';
$_lang['ticket_comment_err_has_replies'] = 'This comment already has replies, so you cannot change it.';
$_lang['ticket_comment_err_parent'] = 'You are trying to reply to not existing comment.';
$_lang['ticket_comment_err_comment'] = 'This comment does not exist.';
$_lang['ticket_comment_err_vote_own'] = 'You cannot vote for your own comment.';
$_lang['ticket_comment_err_vote_already'] = 'You have already voted for this comment.';
$_lang['ticket_comment_err_wrong_guest_ip'] = 'You are not authorized and your ip is not the same as the ip of the author of this comment.';
$_lang['ticket_comment_err_empty'] = 'You forgot to write a comment.';
$_lang['ticket_comment_err_email'] = 'You have specified an invalid email.';
$_lang['ticket_comment_err_guest_edit'] = 'You are not allowed to edit comments.';
$_lang['ticket_comment_err_captcha'] = 'Invalid code of protection against spam.';
$_lang['ticket_comment_err_no_email'] = 'You need to specify the email in your account settings..';

$_lang['ticket_publishedon'] = 'Published On';
$_lang['ticket_pagetitle'] = 'Title';
$_lang['ticket_author'] = 'Author';
$_lang['ticket_delete'] = 'Delete ticket';
$_lang['ticket_delete_text'] = 'Are you sure you want to delete this ticket?';
$_lang['ticket_create'] = 'Create ticket?';
$_lang['ticket_disable_jevix'] = 'Disable Jevix';
$_lang['ticket_disable_jevix_help'] = 'Display content of this page without Jevix sanitization. It is dangerous, any user, that creates the page can attack your site (XSS, LFI etc.).';
$_lang['ticket_process_tags'] = 'Process MODX tags';
$_lang['ticket_process_tags_help'] = 'By default tags in bracket displaying as is, without processing by parser. If you enable it - on this page can be run various snippets, chunks, etc.';
$_lang['ticket_private'] = 'Private ticket';
$_lang['ticket_private_help'] = 'If true, users will must be have permission "ticket_view_private" for reading this ticket.';
$_lang['ticket_show_in_tree'] = 'Show in the tree';
$_lang['ticket_show_in_tree_help'] = 'default they are not displayed in the resource tree MODX, so as not to burden him.';
$_lang['ticket_pagetitle'] = 'Title';
$_lang['ticket_content'] = 'Describe your problem';
$_lang['ticket_publish'] = 'Publish';
$_lang['ticket_preview'] = 'Preview';
$_lang['ticket_save'] = 'Submit';
$_lang['ticket_read_more'] = 'Read more';

$_lang['ticket_thread'] = 'Comments thread';
$_lang['ticket_thread_name'] = 'Thread name';
$_lang['ticket_thread_intro'] = 'Comments that are grouped on threads. Usually, one thread is the all comments of the one page.';
$_lang['ticket_thread_createdon'] = 'Created on';
$_lang['ticket_thread_editedon'] = 'Edited on';
$_lang['ticket_thread_deletedon'] = 'Deleted on';
$_lang['ticket_thread_comments'] = 'Comments';
$_lang['ticket_thread_resource'] = 'Ticket id';
$_lang['ticket_thread_delete'] = 'Disable thread';
$_lang['ticket_thread_undelete'] = 'Enable thread';
$_lang['ticket_thread_close'] = 'Close thread';
$_lang['ticket_thread_open'] = 'Open thread';
$_lang['ticket_thread_remove'] = 'Remove with comments';
$_lang['ticket_thread_remove_confirm'] = 'Are you sure you want to totally remove <b>all</b> this thread? This operation is irreversible!';
$_lang['ticket_thread_view'] = 'View on site';
$_lang['ticket_thread_err_deleted'] = 'Commenting is disabled.';
$_lang['ticket_thread_err_closed'] = 'Adding new comments is disabled.';
$_lang['ticket_thread_manage_comments'] = 'Manage comments';
$_lang['ticket_thread_subscribed'] = 'You have subscribe to notifications about new comments.';
$_lang['ticket_thread_subscribed'] = 'You will no longer receive notifications about new comments in this thread.';

$_lang['ticket_date_now'] = 'Just now';
$_lang['ticket_date_today'] = 'Today at';
$_lang['ticket_date_yesterday'] = 'Yesterday at';
$_lang['ticket_date_tomorrow'] = 'Tomorrow at';
$_lang['ticket_date_minutes_back'] = '["[[+minutes]] minutes ago","[[+minutes]] minutes ago","[[+minutes]] minutes ago"]';
$_lang['ticket_date_minutes_back_less'] = 'Less than a minute ago';
$_lang['ticket_date_hours_back'] = '["[[+hours]] hours ago","[[+hours]] hours ago","[[+hours]] hours ago"]';
$_lang['ticket_date_hours_back_less'] = 'Less than an hour ago';
$_lang['ticket_date_months'] = '["january","february","march","april","may","june","july","august","september","october","november","december"]';

$_lang['ticket_comment_email_owner'] = 'New comment for your ticket "[[+pagetitle]]"';
$_lang['ticket_comment_email_reply'] = 'Reply to your comment for ticket "[[+pagetitle]]"';
$_lang['ticket_comment_email_subscription'] = 'New comment for ticket "[[+pagetitle]]"';
$_lang['ticket_comment_email_bcc'] = 'New comment for ticket "[[+pagetitle]]"';
$_lang['ticket_email_bcc'] = 'New ticket on site - "[[+pagetitle]]"';

$_lang['ticket_like'] = 'Like';
$_lang['ticket_dislike'] = 'Dislike';
$_lang['ticket_refrain'] = 'See ratings';
$_lang['ticket_rating_total'] = 'Total';
$_lang['ticket_rating_and'] = 'and';