<?php

namespace Kanboard\Plugin\Blueboard;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/RedBoard/skin-red.css"));
    }

    public function getPluginName()
    {
        return 'RedBoard';
    }

    public function getPluginDescription()
    {
        return t('A CSS-only theme for Kanboard');
    }

    public function getPluginAuthor()
    {
        return "Carlos González Gurrea";
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'http://new.carlosgonzalezgurrea.es/kanboard-alternativa-a-trello/';
    }
}
