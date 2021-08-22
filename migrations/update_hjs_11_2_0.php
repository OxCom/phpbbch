<?php

namespace oxcom\phpbbch\migrations;

class update_hjs_11_2_0 extends \phpbb\db\migration\migration
{
    /**
     * If our config variable already exists in the db
     * skip this migration.
     */
    public function effectively_installed()
    {
        return isset($this->config['oxcom_phpbbch_version']) && $this->config['oxcom_phpbbch_version'] === '11.2.0';
    }

    /**
     * This migration depends on phpBB's v314 migration
     * already being installed and previous migrations from module
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
            ['config.update', ['oxcom_phpbbch_version', '11.2.0']],
        ];
    }

    public function revert_data()
    {
        return [
            ['config.update', ['oxcom_phpbbch_version', '9.12.0']],
        ];
    }
}
