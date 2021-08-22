<?php

namespace oxcom\phpbbch\event;

use oxcom\phpbbch\acp\main_module;
use phpbb\config\config;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\controller\helper;
use phpbb\template\template;
use phpbb\user;

/**
 * Event listener
 */
class main implements EventSubscriberInterface
{
    /**
     * @var \phpbb\controller\helper
     */
    protected $helper;

    /**
     * @var \phpbb\template\template
     */
    protected $template;

    /**
     * @var \phpbb\user
     */
    protected $user;

    /**
     * @var \phpbb\config\config
     */
    protected $config;

    public function __construct(config $config, helper $helper, template $template, user $user)
    {
        $this->helper   = $helper;
        $this->template = $template;
        $this->user     = $user;
        $this->config   = $config;
    }

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            'core.user_setup' => 'initExtension',
        ];
    }

    /**
     * @param \phpbb\event\data $event
     */
    public function initExtension($event)
    {
        $this->initLanguageSupport($event);

        $available = \oxcom\phpbbch\core\settings::getLanguages();
        $enabled   = $this->getSelectedLanguages();

        foreach ($available as $key => $name) {
            if (\in_array($key, $enabled, true)) {
                continue;
            }

            unset($available[$key]);
        }

        $this->template->assign_vars([
            'PHPBBCH_ALLOWED_LANGS'      => \array_keys($available),
            'PHPBBCH_POST_HELP_LANGS'    => $available,
            'PHPBBCH_BEHAVIOUR_EXT_ONLY' => $this->config['oxcom_phpbbch_format_only'],
        ]);
    }


    /**
     * Get list of selected languages
     *
     * @return array
     */
    protected function getSelectedLanguages()
    {
        $allowed = \oxcom\phpbbch\core\settings::getLanguages();
        $allowed = array_keys($allowed);

        // get list of selected languages
        return \array_filter($allowed, function ($key) {
            $key    = 'oxcom_phpbbch_lang_'.$key;
            $status = $this->config[$key];

            return !empty($status) && $status === main_module::ENUM_ALLOWED_YES;
        });
    }

    /**
     * Load common files during user setup
     *
     * @param \phpbb\event\data $event The event object
     *
     * @access public
     */
    public function initLanguageSupport($event)
    {
        $lang_set_ext   = $event['lang_set_ext'];
        $lang_set_ext[] = [
            'ext_name' => 'oxcom/phpbbch',
            'lang_set' => 'phpbbch',
        ];

        $event['lang_set_ext'] = $lang_set_ext;
    }
}
