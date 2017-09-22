<?php

namespace oxcom\phpbbch\acp;

class main_module
{
    const ENUM_ALLOWED_YES = 'Y';
    const ENUM_ALLOWED_NO  = 'N';

    public $u_action;

    /**
     * @var string
     */
    public $tpl_name = 'acp_phpbbch_body';

    /**
     * @var
     */
    public $page_title;

    protected $config;

    protected $user;

    public function main($id, $mode)
    {
        global $template, $request, $config, $user;

        $this->config     = $config;
        $this->user       = $user;
        $this->page_title = $this->lang('ACP_PHPBBCHT_TITILE');

        add_form_key('oxcom_phpbbch_settings');

        if ($request->is_set_post('submit')) {
            if (!check_form_key('oxcom_phpbbch_settings')) {
                trigger_error('FORM_INVALID');
            }

            $theme = $request->variable('oxcom_phpbbch_theme', 'none');
            $langs = $request->variable('oxcom_phpbbch_langs', ['none']);

            $this->config->set('oxcom_phpbbch_theme', $theme);
            $this->updateLanguages($langs);

            trigger_error($this->lang('ACP_PHPBBCH_SETTING_SAVED') . adm_back_link($this->u_action));
        }

        $template->assign_vars([
            'ACP_PHPBBCH_LANGUAGES' => \oxcom\phpbbch\core\settings::getLanguages(),
            'ACP_PHPBBCH_THEMES'    => \oxcom\phpbbch\core\settings::getThemes(),
            'ACP_PHPBBCH_THEME'     => $this->config['oxcom_phpbbch_theme'],
            'ACP_PHPBBCH_LANGS'     => $this->getSelectedLanguages(),
            'ACP_PHPBBCH_VERSION'   => $this->config['oxcom_phpbbch_version'],
            'U_ACTION'              => $this->u_action,
        ]);
    }

    /**
     * Dictionary support
     *
     * @param string $key
     *
     * @return string
     */
    protected function lang($key)
    {
        return !empty($this->user->lang[$key]) ? $this->user->lang[$key] : $key;
    }

    /**
     * Get list of selected languages
     *
     * @return array
     */
    protected function getSelectedLanguages()
    {
        $config  = $this->config;
        $allowed = \oxcom\phpbbch\core\settings::getLanguages();
        $allowed = array_keys($allowed);

        // get list of selected languages
        $enabled = array_filter($allowed, function ($key) use ($config) {
            $key    = 'oxcom_phpbbch_lang_' . $key;
            $status = $this->config[$key];

            return !empty($status) && $status === static::ENUM_ALLOWED_YES;
        });

        return $enabled;
    }

    /**
     * Enable selected languages
     *
     * @param array $langs
     */
    protected function updateLanguages($langs)
    {
        $allowed = \oxcom\phpbbch\core\settings::getLanguages();
        $allowed = array_keys($allowed);
        $langs   = array_map(function ($lang) {
            return mb_strtolower($lang);
        }, $langs);
        $langs   = array_unique($langs);

        // get list of selected languages
        $enabled = $this->getSelectedLanguages();

        // set correct status
        foreach ($allowed as $key) {
            $option = 'oxcom_phpbbch_lang_' . $key;

            switch (true) {
                case !in_array($key, $enabled, true) && in_array($key, $langs, true):
                    // enable
                    $this->config->set($option, static::ENUM_ALLOWED_YES);
                    break;

                case in_array($key, $enabled, true) && !in_array($key, $langs, true):
                    // disable language
                    $this->config->set($option, static::ENUM_ALLOWED_NO);
                    break;
            }
        }
    }
}
