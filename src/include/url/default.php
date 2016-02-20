<?php
/**
 * Copyright (C) 2015 Panther (https://www.pantherforum.org)
 * based on code by FluxBB copyright (C) 2008-2012 FluxBB
 * License: http://www.gnu.org/licenses/gpl.html GPL version 3 or higher
 */

// Make sure no one attempts to run this script "directly"
if (!defined('PANTHER'))
    exit;

$panther_url = array(
    'change_email' => 'profile.php?action=change_email&id=$1',
    'change_email_key' => 'profile.php?action=change_email&id=$1&key=$2',
    'change_password' => 'profile.php?action=change_pass&id=$1',
    'upload_avatar' => 'profile.php?action=upload_avatar&id=$1&csrf_token=$2',
    'use_gravatar' => 'profile.php?action=use_gravatar&id=$1&csrf_token=$2',
    'change_password_key' => 'profile.php?action=change_pass&id=$1&key=$2',
    'delete' => 'delete.php?id=$1',
    'delete_avatar' => 'profile.php?action=delete_avatar&id=$1&csrf_token=$2',
    'edit' => 'edit.php?id=$1',
    'edit_edit' => 'edit.php?id=$1&action=edit',
    'email' => 'misc.php?email=$1',
    'forum' => 'viewforum.php?id=$1',
    'forum_paginate' => 'viewforum.php?id=$1',
    'forum_noid' => 'viewforum.php',
    'forum_page' => 'viewforum.php?id=$1&p=$2',
    'attachment' => 'attachment.php?item=$1',
    'attachment_download' => 'attachment.php?item=$1&download=1',
    'announcement_fid' => 'announcement.php?id=$1&fid=$2',
    'announcement' => 'announcement.php?id=$1',
    'online' => 'online.php',
    'forum_rss' => 'extern.php?action=feed&fid=$1&type=rss',
    'forum_atom' => 'extern.php?action=feed&fid=$1&type=atom',
    'forum_subscribe' => 'misc.php?action=subscribe&fid=$1&csrf_token=$2',
    'forum_unsubscribe' => 'misc.php?action=unsubscribe&fid=$1&csrf_token=$2',
    'index' => 'index.php',
    'index_rss' => 'extern.php?action=feed&type=rss',
    'index_atom' => 'extern.php?action=feed&type=atom',
    'login' => 'login.php',
    'login_in' => 'login.php?action=in',
    'logout' => 'login.php?action=out&id=$1&csrf_token=$2',
    'mark_read' => 'misc.php?action=markread&csrf_token=$1',
    'mark_forum_read' => 'misc.php?action=markforumread&fid=$1&csrf_token=$2',
    'new_topic' => 'post.php?fid=$1',
    'new_topic_post' => 'post.php?action=post&fid=$1',
    'new_reply_post' => 'post.php?action=post&tid=$1',
    'new_reply' => 'post.php?tid=$1',
    'leaders' => 'misc.php?action=leaders',
    'post' => 'viewtopic.php?pid=$1#p$1',
    'profile' => 'profile.php?id=$1',
    'profile_essentials' => 'profile.php?section=essentials&id=$1',
    'profile_personal' => 'profile.php?section=personal&id=$1',
    'profile_messaging' => 'profile.php?section=messaging&id=$1',
    'profile_personality' => 'profile.php?section=personality&id=$1',
    'profile_display' => 'profile.php?section=display&id=$1',
    'profile_privacy' => 'profile.php?section=privacy&id=$1',
    'profile_rep_received' => 'profile.php?section=rep_received&id=$1',
    'profile_view' => 'profile.php?section=view&id=$1',
    'profile_rep_given' => 'profile.php?section=rep_given&id=$1',
    'profile_admin' => 'profile.php?section=admin&id=$1',
    'profile_promote' => 'profile.php?action=promote&id=$1&pid=$2&csrf_token=$3',
    'quote' => 'post.php?tid=$1&qid=$2',
    'register' => 'register.php',
    'register_register' => 'register.php?action=register',
    'report' => 'misc.php?report=$1',
    'request_password' => 'login.php?action=forget',
    'inbox' => 'pms_inbox.php',
    'box' => 'pms_inbox.php?id=$1',
    'pms_delete' => 'pms_misc.php?action=delete&pid=$1',
    'pms_folders' => 'pms_misc.php?action=folders',
    'pms_blocked' => 'pms_misc.php?action=blocked',
    'pms_edit' => 'pms_misc.php?action=edit&pid=$1',
    'pms_quote' => 'pms_send.php?tid=$1&qid=$2',
    'pms_view' => 'pms_view.php?tid=$1',
    'pms_paginate' => 'pms_view.php?tid=$1',
    'pms_new' => 'pms_view.php?tid=$1&action=new',
    'pms_last' => 'pms_view.php?tid=$1&action=last',
    'pms_post' => 'pms_view.php?pid=$1#p$1',
    'send_message' => 'pms_send.php',
    'pms_reply' => 'pms_send.php?tid=$1',
    'rules' => 'misc.php?action=rules',
    'search' => 'search.php',
    'search_cache' => 'search.php?search_id=$1',
    'search_pagination' => 'search.php?search_id=$1',
    'search_result' => 'search.php?action=search&keywords=$1&author=$3&forums=$2&search_in=$4&sort_by=$5&sort_dir=$6&show_as=$7',
    'search_new' => 'search.php?action=show_new',
    'search_replies' => 'search.php?action=show_replies',
    'search_recent' => 'search.php?action=show_recent',
    'search_unanswered' => 'search.php?action=show_unanswered',
    'search_new_results' => 'search.php?action=show_new&fid=$1',
    'search_subscriptions' => 'search.php?action=show_subscriptions&user_id=$1',
    'search_user_posts' => 'search.php?action=show_user_posts&user_id=$1',
    'search_user_topics' => 'search.php?action=show_user_topics&user_id=$1',
    'topic_subscribe' => 'misc.php?action=subscribe&tid=$1&csrf_token=$2',
    'poll_add' => 'poll_add.php?id=$1',
    'poll_vote' => 'poll_vote.php',
    'poll_reset' => 'poll_misc.php?reset=$1',
    'poll_delete' => 'poll_misc.php?delete=$1',
    'poll_edit' => 'poll_misc.php?edit=$1',
    'topic' => 'viewtopic.php?id=$1',
    'topic_paginate' => 'viewtopic.php?id=$1',
    'online' => 'online.php',
    'topic_rss' => 'extern.php?action=feed&tid=$1&type=rss',
    'topic_atom' => 'extern.php?action=feed&tid=$1&type=atom',
    'topic_new_posts' => 'viewtopic.php?id=$1&action=new',
    'topic_page' => 'viewtopic.php?id=$1&p=$2',
    'topic_last_post' => 'viewtopic.php?id=$1&action=last',
    'topic_unsubscribe' => 'misc.php?action=unsubscribe&tid=$1&csrf_token=$2',
    'userlist' => 'userlist.php',
    'userlist_group' => 'userlist.php?show_group=$1',
    'userlist_result' => 'userlist.php?username=$1&show_group=$2&sort_by=$3&sort_dir=$4',
    'page' => '&p=$1',
    'moderate_forum' => 'moderate.php?fid=$1',
    'moderate_forum_p' => 'moderate.php?fid=$1&p=$2',
    'moderate_topic_p' => 'moderate.php?fid=$1&tid=$2&p=$3',
    'get_host' => 'moderate.php?get_host=$1',
    'help' => 'help.php#$1',
    'move' => 'moderate.php?fid=$1&move_topics=$2&csrf_token=$3',
    'unapprove' => 'moderate.php?fid=$1&unapprove=$2&csrf_token=$3',
    'open' => 'moderate.php?fid=$1&open=$2&csrf_token=$3',
    'close' => 'moderate.php?fid=$1&close=$2&csrf_token=$3',
    'stick' => 'moderate.php?fid=$1&stick=$2&csrf_token=$3',
    'unarchive' => 'moderate.php?fid=$1&unarchive=$2&csrf_token=$3',
    'archive' => 'moderate.php?fid=$1&archive=$2&csrf_token=$3',
    'unstick' => 'moderate.php?fid=$1&unstick=$2&csrf_token=$3',
    'moderate_topic' => 'moderate.php?fid=$1&tid=$2',
    'moderate_all' => 'moderate.php?fid=$1&tid=$2&action=all',
    'moderate_multi' => 'moderate.php?fid=$1&multi_moderate=$2&csrf_token=$3',
    'admin_index' => PANTHER_ADMIN_DIR.'/index.php',
    'admin_bans' => PANTHER_ADMIN_DIR.'/bans.php',
    'admin_categories' => PANTHER_ADMIN_DIR.'/categories.php',
    'admin_permissions' => PANTHER_ADMIN_DIR.'/permissions.php',
    'admin_censoring' => PANTHER_ADMIN_DIR.'/censoring.php',
    'enable_extension' => PANTHER_ADMIN_DIR.'/addons.php?action=enable&file=$1',
    'disable_extension' => PANTHER_ADMIN_DIR.'/addons.php?action=disable&file=$1',
	'uninstall_extension' => PANTHER_ADMIN_DIR.'/addons.php?action=uninstall&file=$1',
	'install_extension' => PANTHER_ADMIN_DIR.'/addons.php?action=install&file=$1',
    'admin_forums' => PANTHER_ADMIN_DIR.'/forums.php',
    'admin_statistics' => PANTHER_ADMIN_DIR.'/statistics.php',
    'admin_forums_action' => PANTHER_ADMIN_DIR.'/forums.php?action=$1',
    'edit_forum' => PANTHER_ADMIN_DIR.'/forums.php?edit_forum=$1',
    'del_forum' => PANTHER_ADMIN_DIR.'/forums.php?del_forum=$1',
    'admin_groups' => PANTHER_ADMIN_DIR.'/groups.php',
    'del_group' => PANTHER_ADMIN_DIR.'/groups.php?delete_group=$1',
    'edit_group' => PANTHER_ADMIN_DIR.'/groups.php?edit_group=$1',
    'admin_loader' => PANTHER_ADMIN_DIR.'/loader.php?plugin=$1',
    'admin_maintenance' => PANTHER_ADMIN_DIR.'/maintenance.php',
    'remove_install_file' => PANTHER_ADMIN_DIR.'/index.php?action=remove_install_file',
    'check_upgrade' => PANTHER_ADMIN_DIR.'/index.php?action=check_upgrade',
    'save_notes' => PANTHER_ADMIN_DIR.'/index.php?action=save_notes',
    'admin_options' => PANTHER_ADMIN_DIR.'/options.php',
    'admin_options_direct' => PANTHER_ADMIN_DIR.'/options.php#$1',
    'admin_ranks' => PANTHER_ADMIN_DIR.'/ranks.php',
    'admin_deleted' => PANTHER_ADMIN_DIR.'/deleted.php',
    'admin_updates' => PANTHER_ADMIN_DIR.'/updates.php',
    'admin_announcements' => PANTHER_ADMIN_DIR.'/announcements.php',
    'add_announcement' => PANTHER_ADMIN_DIR.'/announcements.php?action=add',
    'edit_announcement' => PANTHER_ADMIN_DIR.'/announcements.php?action=edit&id=$1',
    'delete_announcement' => PANTHER_ADMIN_DIR.'/announcements.php?action=delete&id=$1',
    'upload_image' => PANTHER_ADMIN_DIR.'/groups.php?action=upload_image&id=$1',
    'delete_image' => PANTHER_ADMIN_DIR.'/groups.php?action=delete_image&id=$1',
    'admin_archive' => PANTHER_ADMIN_DIR.'/archive.php',
    'admin_smilies' => PANTHER_ADMIN_DIR.'/smilies.php',
    'admin_reports' => PANTHER_ADMIN_DIR.'/reports.php',
    'admin_posts' => PANTHER_ADMIN_DIR.'/posts.php',
    'admin_attachments' => PANTHER_ADMIN_DIR.'/attachments.php',
    'admin_moderate' => PANTHER_ADMIN_DIR.'/moderate.php',
    'admin_moderate_add' => PANTHER_ADMIN_DIR.'/moderate.php?action=add',
    'admin_moderate_edit' => PANTHER_ADMIN_DIR.'/moderate.php?action=edit&id=$1',
    'admin_moderate_delete' => PANTHER_ADMIN_DIR.'/moderate.php?action=delete&id=$1',
    'admin_users' => PANTHER_ADMIN_DIR.'/users.php',
    'phpinfo' => PANTHER_ADMIN_DIR.'/index.php?action=phpinfo',
    'admin_restrictions' => PANTHER_ADMIN_DIR.'/restrictions.php',
    'admin_restrictions_query' => PANTHER_ADMIN_DIR.'/restrictions.php?$1',
    'admin_reports_zap' => PANTHER_ADMIN_DIR.'/reports.php?action=zap',
    'admin_reports' => PANTHER_ADMIN_DIR.'/reports.php',
    'admin_users_users' => PANTHER_ADMIN_DIR.'/users.php?show_users=$1',
    'admin_users_ip_stats' => PANTHER_ADMIN_DIR.'/users.php?ip_stats=$1',
    'admin_robots' => PANTHER_ADMIN_DIR.'/robots.php',
    'admin_posts' => PANTHER_ADMIN_DIR.'/posts.php',
    'edit_ban' => PANTHER_ADMIN_DIR.'/bans.php?edit_ban=$1',
    'del_ban' => PANTHER_ADMIN_DIR.'/bans.php?delete_ban=$1',
    'more_bans' => PANTHER_ADMIN_DIR.'/bans.php?action=more',
    'admin_bans_add' => PANTHER_ADMIN_DIR.'/bans.php?add_ban=$1',
    'admin_warnings' => PANTHER_ADMIN_DIR.'/warnings.php',
    'admin_addons' => PANTHER_ADMIN_DIR.'/addons.php',
    'warning_del_level' => PANTHER_ADMIN_DIR.'/warnings.php?del_level=$1',
    'warning_edit_level' => PANTHER_ADMIN_DIR.'/warnings.php?edit_level=$1',
    'warning_del_type' => PANTHER_ADMIN_DIR.'/warnings.php?del_type=$1',
    'warning_edit_type' => PANTHER_ADMIN_DIR.'/warnings.php?edit_type=$1',
    'delete_task' => PANTHER_ADMIN_DIR.'/tasks.php?delete=$1',
    'edit_task' => PANTHER_ADMIN_DIR.'/tasks.php?edit=$1',
	'admin_tasks' => PANTHER_ADMIN_DIR.'/tasks.php',
    'warnings_recent' => 'warnings.php?action=show_recent',
    'warnings' => 'warnings.php',
    'warning_view' => 'warnings.php?view=$1',
    'warning_details' => 'warnings.php?details=$1',
    'warn_user' => 'warnings.php?warn=$1',
    'warn_pid' => 'warnings.php?warn=$1&pid=$2'
);

// No need for rewrite rules, because this is the default pack
$rewrite_rules = array();