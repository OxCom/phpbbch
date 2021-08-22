<?php

namespace oxcom\phpbbch\migrations;

class format_only_ext extends \phpbb\db\migration\migration
{
    /**
     * If our config variable already exists in the db
     * skip this migration.
     */
    public function effectively_installed()
    {
        return isset($this->config['oxcom_phpbbch_format_only']);
    }

    /**
     * This migration depends on phpBB's v314 migration
     * already being installed.
     */
    static public function depends_on()
    {
        return [
            '\phpbb\db\migration\data\v31x\v314',
            '\oxcom\phpbbch\migrations\add_module',
        ];
    }

    public function update_data()
    {
        return [
            ['config.add', ['oxcom_phpbbch_format_only', 'N']],
        ];
    }

    public function revert_data()
    {
        return [
            ['config.remove', ['oxcom_phpbbch_format_only']],
        ];
    }
}
