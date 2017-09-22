<?php

namespace oxcom\phpbbch\core;

use phpbb\db\driver\driver_interface;

class code
{
    /**
     * @var \phpbb\db\driver\driver_interface
     */
    protected $db;

    /**
     * Root path to the PHPBB
     * @var string
     */
    protected $root;

    /**
     * PHPBB file extension
     * @var string
     */
    protected $ext;

    /**
     * @var \acp_bbcodes
     */
    protected $acp;

    /**
     * code constructor.
     *
     * @param \phpbb\db\driver\driver_interface $db
     * @param string                            $root
     * @param string                            $ext
     */
    public function __construct(driver_interface $db, $root , $ext)
    {
        $this->db   = $db;
        $this->root = $root;
        $this->ext  = $ext;

        // load required classes
        if (!class_exists('acp_bbcodes'))
        {
            include_once ($root . 'includes/acp/acp_bbcodes.' . $ext);
        }

        $this->acp = new \acp_bbcodes();
    }

    /**
     * Add tag to configuration
     *
     * @param string $tag - Tag name
     * @param array $data - Tag properties
     */
    public function install($tag, $data)
    {
        $tag = $this->find($tag);

        $data['bbcode_tag'] = $tag;

        if (empty($tag)) {
            $this->insert($data);
        } else {
            $this->update($tag['bbcode_id'], $data);
        }
    }

    /**
     * Remove tag from configuration
     * @param string $tag
     */
    public function uninstall($tag)
    {
        $data = $this->find($tag);

        if (!empty($tag)) {
            $this->delete($data['bbcode_id']);
        }
    }

    /**
     * @param array $data
     */
    protected function insert($data)
    {
        $id = $this->getNewId();

        if ($id > BBCODE_LIMIT) {
            return;
        }

        // display on posting by default = 1
        $data['bbcode_id']          = (int)$id;
        $data['display_on_posting'] = (int)!array_key_exists('display_on_posting', $data);

        $data   = $this->build($data);
        $insert = $this->db->sql_build_array('INSERT', $data);
        $table  = BBCODES_TABLE;
        $sql    = "INSERT INTO {$table} {$insert}";

        $this->db->sql_query($sql);
    }

    /**
     * @param int $id
     * @param array $data
     */
    protected function update($id, $data)
    {
        $id    = (int)$id;
        $data  = $this->build($data);
        $set   = $this->db->sql_build_array('UPDATE', $data);
        $tabke = BBCODES_TABLE;

        $sql = "
            UPDATE {$tabke}
			SET {$set}
			WHERE bbcode_id = {$id}
        ";

        $this->db->sql_query($sql);
    }

    protected function delete($id)
    {
        $id = (int)$id;
        $table = BBCODES_TABLE;
        $sql = "
            DELETE FROM {$table}
            WHERE  bbcode_id = {$id};
        ";

        $this->db->sql_query($sql);
    }

    /**
     * Build BBCode
     *
     * @param array $data
     *
     * @return array
     */
    protected function build($data)
    {
        $build = $this->acp->build_regexp($data['bbcode_match'], $data['bbcode_tpl']);
        $data  = array_merge($build, $data, ['bbcode_tag' => $build['bbcode_tag']]);

        return $data;
    }

    /**
     * @param $name - BBCode tag
     *
     * @return mixed
     */
    protected function find($name)
    {
        $name  = strtolower($name);
        $table = BBCODES_TABLE;

        $sql   = "
            SELECT c.bbcode_id
            FROM {$table} c
            WHERE LOWER(c.bbcode_tag) = '" . $this->db->sql_escape($name) . "'
        ";

        $result = $this->db->sql_query($sql);
        $row    = $this->db->sql_fetchrow($result);

        $this->db->sql_freeresult($result);

        return $row;
    }

    /**
     * Retrieve next ID for new BBCode, because there is no autoincrement
     *
     * @return int New ID
     */
    protected function getNewId()
    {
        $table = BBCODES_TABLE;
        $sql   = "
            SELECT (MAX(c.bbcode_id) + 1) AS new_id
            FROM {$table} c
        ";

        $result = $this->db->sql_query($sql);
        $id     = (int)$this->db->sql_fetchfield('new_id');

        $this->db->sql_freeresult($result);

        if ($id <= NUM_CORE_BBCODES) {
            // set correct code ID
            $id = NUM_CORE_BBCODES + 1;
        }

        return $id;
    }
}
