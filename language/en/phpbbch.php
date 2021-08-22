<?php

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
    exit;
}

if (empty($lang) || !is_array($lang)) {
    $lang = [];
}

$lang = array_merge($lang, [
    'ACP_PHPBBCH'          => 'PHPBB Code Highlight',
    'ACP_PHPBBCH_SETTINGS' => 'Settings',

    'ACP_PHPBBCH_SETTING_SAVED' => 'Settings were saved',

    'ACP_PHPBBCH_LANGUAGES' => 'Languages',
    'ACP_PHPBBCH_THEME'     => 'Theme',
    'ACP_PHPBBCH_THEME_D'     => 'Please visit this site to get more information about themes',
    'ACP_PHPBBCH_BEHAVIOUR' => 'Behaviour',
    'ACP_PHPBBCH_BEHAVIOUR_D' => 'Customize plugin behaviour.',

    'ACP_PHPBBCH_BEHAVIOUR_EXT_ONLY' => 'Force formatting only code blocks created by this extension only.',

    'PHPBBCH_POST_TAB_TITLE' => 'Syntax Highlight',
    'PHPBBCH_POST_TAB_HELP'  => 'Please find list of available languages',
]);
