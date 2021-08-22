<?php

namespace oxcom\phpbbch\tests;

use oxcom\phpbbch\core\settings;
use PHPUnit\Framework\TestCase;

class FileMapTest extends TestCase
{
    const LANG_JS_PATH    = './../styles/all/template/js/higlightjs/languages';
    const LANG_THEME_PATH = './../styles/all/theme/higlightjs';

    public function testTheme()
    {
        foreach (settings::getLanguages() as $file => $name) {
            $path = __DIR__.'/'.self::LANG_JS_PATH.'/'.$file.'.min.js';
            $path = \realpath($path);

            self::assertTrue(\file_exists($path), "File not found for language $name");
        }
    }

    public function testLanguage()
    {
        foreach (settings::getThemes() as $file => $name) {
            $path = __DIR__.'/'.self::LANG_THEME_PATH.'/'.$file.'.min.css';
            $path = \realpath($path);

            self::assertTrue(\file_exists($path), "File not found for theme $name");
        }
    }
}
