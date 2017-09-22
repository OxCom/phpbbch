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

    'PHPBBCH_POST_TAB_TITLE' => 'Syntax Highlight',
    'PHPBBCH_POST_TAB_HELP'  => 'Please find list of available languages',
]);
