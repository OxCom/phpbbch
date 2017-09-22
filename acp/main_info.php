<?php

namespace oxcom\phpbbch\acp;

class main_info
{
    public function module()
    {
        return [
            'filename' => '\oxcom\phpbbch\acp\main_module',
            'title'    => 'ACP_PHPBBCH',
            'modes'    => [
                'settings' => [
                    'title' => 'ACP_PHPBBCH_SETTINGS',
                    'auth'  => 'ext_oxcom/phpbbch && acl_a_board',
                    'cat'   => ['ACP_PHPBBCH'],
                ],
            ],
        ];
    }
}
