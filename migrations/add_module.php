<?php

namespace oxcom\phpbbch\migrations;

class add_module extends \phpbb\db\migration\migration
{
    /**
     * If our config variable already exists in the db
     * skip this migration.
     */
    public function effectively_installed()
    {
        return isset($this->config['oxcom_phpbbch_version']);
    }

    /**
     * This migration depends on phpBB's v314 migration
     * already being installed.
     */
    static public function depends_on()
    {
        return ['\phpbb\db\migration\data\v31x\v314'];
    }

    public function update_data()
    {
        return [

            // Add the config variable we want to be able to set
            ['config.add', ['oxcom_phpbbch_version', '9.12.0']],
            ['config.add', ['oxcom_phpbbch_theme', 'vs2015']], // because it's developed by my own goal
            ['config.add', ['oxcom_phpbbch_lang_cpp', 'Y']],
            ['config.add', ['oxcom_phpbbch_lang_cs', 'Y']],
            ['config.add', ['oxcom_phpbbch_lang_lua', 'Y']],
            ['config.add', ['oxcom_phpbbch_lang_xml', 'Y']],

            // Add a parent module (ACP_PHPBBCH_SETTINGS) to the Extensions tab (ACP_CAT_DOT_MODS)
            [
                'module.add',
                [
                    'acp',
                    'ACP_CAT_DOT_MODS',
                    'ACP_PHPBBCH',
                ],
            ],

            // Add our main_module to the parent module (ACP_PHPBBCH)
            [
                'module.add',
                [
                    'acp',
                    'ACP_PHPBBCH',
                    [
                        'module_basename' => '\oxcom\phpbbch\acp\main_module',
                        'modes'           => ['settings'],
                    ],
                ],
            ],
        ];
    }

    public function revert_data()
    {
        return [
            [
                'module.remove',
                [
                    'acp',
                    'ACP_PHPBBCH',
                    [
                        'module_basename' => '\oxcom\phpbbch\acp\main_module',
                        'modes'           => ['settings'],
                    ],
                ],
            ],
            [
                'module.remove',
                [
                    'acp',
                    'ACP_CAT_DOT_MODS',
                    'ACP_PHPBBCH',
                ],
            ],
            ['config.remove', ['oxcom_phpbbch_lang_cpp']],
            ['config.remove', ['oxcom_phpbbch_lang_cs']],
            ['config.remove', ['oxcom_phpbbch_lang_lua']],
            ['config.remove', ['oxcom_phpbbch_lang_xml']],
            ['config.remove', ['oxcom_phpbbch_theme']],
            ['config.remove', ['oxcom_phpbbch_version']],
        ];
    }
}
