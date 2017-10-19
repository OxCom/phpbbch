<?php

namespace oxcom\phpbbch\migrations;

use \phpbb\db\migration\container_aware_migration;

/**
 * Class add_code
 */
class add_code extends container_aware_migration
{
    public function update_data()
    {
        return [
            ['custom', [[$this, 'install_phpbbch']]],
        ];
    }

    public function revert_data()
    {
        return [
            ['custom', [[$this, 'uninstall_phpbbch']]],
        ];
    }

    /**
     * Wrapper for installing bbcodes in migrations
     */
    public function install_phpbbch()
    {
        $code = new \oxcom\phpbbch\core\code($this->db, $this->phpbb_root_path, $this->php_ext);
        $code->install('Syntax=', [
            'bbcode_helpline'    => 'Usage: [syntax=style]code[/syntax]. See Syntax Highlight tab.',
            'bbcode_match'       => '[syntax={IDENTIFIER}]{TEXT}[/syntax]',
            'first_pass_replace' => '\'[syntax=${1}:$uid]${2}[/syntax:$uid]\'',
            'bbcode_tpl'         => '<div class="codebox" data-bind="code-box"><p>Code: <a href="#" onclick="selectCode(this); return false;">Select all</a></p><code data-bind="phpbbch-code" class="{IDENTIFIER}">{TEXT}<br></code></div>',
        ]);
    }

    public function uninstall_phpbbch()
    {
        $code = new \oxcom\phpbbch\core\code($this->db, $this->phpbb_root_path, $this->php_ext);
        $code->uninstall('Syntax=');
    }
}
