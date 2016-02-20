<?php

// Language definitions used in admin_groups.php
$lang_admin_groups = array(
    
    'allow group reputation' => 'Allow reputation use',
    'allow reputation privileges' => 'You can choose whether this group are allowed to use the reputation system. Note that the icons will not be displayed to the user at all.',
    'group max positive' => 'Maximum Positive votes',
    'group max positive legend' => 'The maximum amount of positive votes that a user in this group can give in one day. Set to 0 to disable.',
    'group max negative legend' => 'The maximum amount of negative votes that a user in this group can give in one day. Set to 0 to disable.',
    'group max negative' => 'Maximum Negative votes',
    'group interval' => 'Vote Interval',
    'group interval legend' => 'Number of seconds that users in this group have to wait between giving or taking reputation from other users. Set to 0 to disable.',
    'Group colour' => 'Group colour',
    'Group colour help' => 'Set group colour. Leave blank to use default colour.',
    'Invalid colour message' => 'You entered an invalid colour.',
    
    'Must enter title message' => 'You must enter a group title.',
    'Title already exists message' => 'There is already a group with the title <strong>%s</strong>.',
    'Default group redirect' => 'Default group set. Redirecting …',
    'Cannot remove default message' => 'The default group cannot be removed. In order to delete this group, you must first setup a different group as the default.',
    'Group removed redirect' => 'Group removed. Redirecting …',
    'Group added redirect' => 'Group added. Redirecting …',
    'Group edited redirect' => 'Group edited. Redirecting …',
    
    'Add groups head' => 'Add/setup groups',
    'Add group subhead' => 'Add new group',
    'New group label' => 'Base new group on',
    'New group help' => 'Select a user group from which the new group will inherit its permission settings. The next page will let you fine-tune its settings.',
    'Default group subhead' => 'Set default group',
    'Default group label' => 'Default group',
    'Default group help' => 'This is the default user group, e.g. the group users are placed in when they register. For security reasons, users can\'t be placed in either the moderator or administrator user groups by default.',
    'Existing groups head' => 'Existing groups',
    'Edit groups subhead' => 'Edit/delete groups',
    'Edit groups info' => 'The pre-defined groups Guests, Administrators, Global Moderators, Moderators and Members cannot be removed. However, they can be edited. Please note that in some groups, some options are unavailable (e.g. the edit posts permission for guests). Administrators always have full permissions.',
    'Edit link' => 'Edit',
    'Delete link' => 'Delete',
    'Group delete head' => 'Group delete',
    'Confirm delete subhead' => 'Confirm delete group',
    'Confirm delete info' => 'Are you sure that you want to delete the group <strong>%s</strong>?',
    'Confirm delete warn' => 'WARNING! After you deleted a group you cannot restore it.',
    'Delete group head' => 'Delete group',
    'Move users subhead' => 'Move users currently in group',
    'Move users info' => 'The group <strong>%s</strong> currently has <strong>%s</strong> members. Please select a group to which these members will be assigned upon deletion.',
    'Move users label' => 'Move users to',
    'Delete group' => 'Delete group',
    'Post polls help' => 'Allow users in this group to post polls with topics.',
    'Post polls label' => 'Post polls',
    
    'Group settings head' => 'Group settings',
    'Group settings subhead' => 'Setup group options and permissions',
    'Group settings info' => 'Below options and permissions are the default permissions for the user group. These options apply if no forum specific permissions are in effect.',
    'Group title label' => 'Group title',
    'User title label' => 'User title',
    'User title help' => 'This title will override any rank users in this group have attained. Leave blank to use default title or rank ("%s").',
    'Promote users label' => 'Promote users',
    'Promote users help' => 'You can promote users to a new group automatically if they reach a certain number of posts. Select "%s" to disable. For security reasons, you are not allowed to select an administrator group here. Also note that group changes for users affected by this setting will take effect <strong>immediately</strong>. Note that the amount of posts you enter is the total amount of posts of a user, not the amount of posts made as a member of this group.',
    'Disable promotion' => 'Disable promoting',
    'Mod privileges label' => 'Allow users moderator privileges',
    'Mod privileges help' => 'In order for a user in this group to have moderator abilities, he/she must be assigned to moderate one or more forums (unless this group is given global moderation privileges). This is done via the user administration page of the user\'s profile.',
    'Global mod label' => 'Allow global privileges',
    'Global mod help' => 'If moderator privileges are enabled, allow users in this group to moderate any forums, even if they are not assigned to moderate them.',
    'Mod CP label' => 'Allow moderators moderator control panel access',
    'Mod CP help' => 'If moderator privileges are enabled, allow users in this group to use the moderator control panel instead of having purely forum based moderator access. If you allow users in this group to ban other users this must be enabled.',
    'Admin label' => 'Allow moderators Administrator privileges',
    'Admin help' => 'If moderator privileges are enabled, allow users in this group to have Administrator privileges. Administrators can edit configuration settings for the board. These can be restricted, but not removed. <em>Note:</em> Users in this group will automatically have global moderation privileges on the forum regardless of the "Global Moderator" privilege, which cannot be restricted.',
    'Edit profile label' => 'Allow moderators to edit user profiles',
    'Edit profile help' => 'If moderator privileges are enabled, allow users in this group to edit user profiles.',
    'Rename users label' => 'Allow moderators to rename users',
    'Rename users help' => 'If moderator privileges are enabled, allow users in this group to rename users.',
    'Change passwords label' => 'Allow moderators to change passwords',
    'Change passwords help' => 'If moderator privileges are enabled, allow users in this group to change user passwords.',
    'Mod promote users label' => 'Allow moderators to promote users',
    'Mod promote users help' => 'If moderator privileges are enabled, allow users in this group to promote users.',
    'Ban users label' => 'Allow moderators to ban users',
    'Ban users help' => 'If moderator privileges are enabled, allow users in this group to ban users.',
    'Report posts label' => 'Allow moderators to report spam',
    'Report posts help' => 'If moderator privileges are enabled, allow users in this group to report posts to StopForumSpam.',
    'Warn users label' => 'Allow moderators to warn users',
    'Warn users help' => 'If moderator privileges are enabled, allow users in this group to warn users.',
    'Edit admin posts label' => 'Allow moderators to edit admin posts',
    'Edit admin posts help' => 'If moderator privileges are enabled, allow users in this group to edit or delete posts which an administrator has posted.',
    'Read board label' => 'Read board',
    'Read board help' => 'Allow users in this group to view the board. This setting applies to every aspect of the board and can therefore not be overridden by forum specific settings. If this is set to "No", users in this group will only be able to login/logout and register.',
    'View user info label' => 'View user information',
    'View user info help' => 'Allow users to view the user list and user profiles.',
    'Post replies label' => 'Post replies',
    'Post replies help' => 'Allow users in this group to post replies in topics.',
    'Post moderation label' => 'Hold posts for moderator review',
    'Post moderation help' => 'If this setting is enabled, all posts made by users in this group will be held for moderator review before appearing.',
    'Post topics label' => 'Post topics',
    'Post topics help' => 'Allow users in this group to post new topics.',
    'Edit posts label' => 'Edit posts',
    'Edit posts help' => 'Allow users in this group to edit their own posts.',
    'Deledit flood label' => 'Timelimit',
    'Deledit flood help' => 'The number of seconds users have in this group to edit or delete their own posts (if allowed). Set to 0 to disable.',
    'Add attachments label' => 'Attach files',
    'Add attachments help' => 'Allow users in this group to attach files to their posts.',
    'Max attachments label' => 'Max per post',
    'Max attachments help' => 'If attachments are allowed, the maximum number of files users in this group can attach per post. Set to 0 for unlimited attachments.',
    'Max size label' => 'Max upload size',
    'Max size help' => 'If attachments are allowed, the maximum file size (in bytes) users in this group may upload to. Set to 0 in order to use the maximum upload size specified in the board configuration.',
    'Edit post subject label' => 'Edit subject',
    'Edit subject help' => 'Allow users in this group to edit the message subject of their topics.',
    'Delete posts label' => 'Delete posts',
    'Delete posts help' => 'Allow users in this group to delete their own posts.',
    'Delete topics label' => 'Delete topics',
    'Delete topics help' => 'Allow users in this group to delete their own topics (including any replies).',
    'Post links label' => 'Post links',
    'Post links help' => 'Allow users in this group to include links in their posts. This setting also applies to signatures and the website field in users\' profiles.',
    'Set own title label' => 'Set own user title',
    'Set own title help' => 'Allow users in this group to set their own user title.',
    'User search label' => 'Use search',
    'User search help' => 'Allow users in this group to use the search feature.',
    'User list search label' => 'Search user list',
    'User list search help' => 'Allow users in this group to freetext search for users in the user list.',
    'Send e-mails label' => 'Send e-mails',
    'Send e-mails help' => 'Allow users in this group to send e-mails to other users.',
    'Post flood label' => 'Post flood interval',
    'Post flood help' => 'Number of seconds that users in this group have to wait between posts. Set to 0 to disable.',
    'Search flood label' => 'Search flood interval',
    'Search flood help' => 'Number of seconds that users in this group have to wait between searches. Set to 0 to disable.',
    'E-mail flood label' => 'Email flood interval',
    'E-mail flood help' => 'Number of seconds that users in this group have to wait between emails. Set to 0 to disable.',
    'Report flood label' => 'Report flood interval',
    'Use pm label' => 'Use private messaging',
    'Use pm help' => 'Allow users in this group access to private messaging.',
    'PM limit label' => 'Private message limit',
    'PM limit help' => 'The maximum number of messages users in this group may have in their inbox at any one time. Set to 0 for unlimited messages.',
    'PM folder limit label' => 'PM Folder limit',
    'PM folder limit help' => 'The maximum number of folders a user in this group may have for their private messages. Set to 0 for unlimited.',
    'Report flood help' => 'Number of seconds that users in this group have to wait between reports. Set to 0 to disable.',
    'Moderator info' => 'Please note that in order for a user in this group to have moderator abilities, he/she must be assigned to moderate one or more forums. This is done via the user administration page of the user\'s profile.',
    'Robot verification label' => 'Robot verification',
    'Robot verification help' => 'If enabled, users in this group will have to reply to an anti-robot question for every post made. These can be configured <a href="%s">here</a>.',
    
    'Image legend' => 'Group image',
    'No image' => 'No images defined',
    'Image upload redirect' => 'Uploaded image. Redirecting …',
    'Image deleted redirect' => 'Deleted image. Redirecting …',
    'Image desc' => 'This image will be displayed under all user\'s avatars for this usergroup. It must not be larger than %sx%s pixels and %s. (%s).',
    'Upload image' => 'Upload image',
    'Upload image legend' => 'Select a file image to upload',
    'Delete image' => 'Delete image',
    'Image info' => 'You can upload an image for this usergroup which will be displayed underneath the avatar of users in this group.',
    'Change image' => 'Change image',
    'Use image' => 'Use image.',
    'Too large ini' => 'The selected file was too large to upload. The server didn\'t allow the upload.',
    'Partial upload' => 'Partially uploaded file. Thank you for trying again.',
    'No tmp directory' => 'The server was not able to register the file sent to a temporary directory.',
    'No file' => 'You did not select a file to be sent.',
    'Bad type' => 'The type of the file is not authorized. The authorized types are GIF, JPG and PNG.',
    'Too wide or high' => 'The image is wider and/or higher than the authorized maximum %sx%s pixels.',
    'Too large' => 'The size of the file exceeds the authorized maximum',
    'bytes' => 'bytes',
    'Move failed' => 'The server was unable to move the file from a temporary location. Please contact the board administrator at %s',
    'Unknown failure' => 'Unknown error. Thank you for trying again.',
    'File' => 'File',
    'Upload' => 'Upload'
    
);