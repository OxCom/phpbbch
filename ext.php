<?php

namespace oxcom\phpbbch;

/**
 * Class ext
 *
 * @package oxcom\phpbbch
 */
class ext extends \phpbb\extension\base
{
    /** string Require 3.1.3 due to throwing new exceptions and using containerAware migration files. */
    const PHPBB_MIN_VERSION = '3.1.3';

    /**
     * {@inheritdoc}
     */
    public function is_enableable()
    {
        $config = $this->container->get('config');

        return phpbb_version_compare($config['version'], self::PHPBB_MIN_VERSION, '>=');
    }
}
