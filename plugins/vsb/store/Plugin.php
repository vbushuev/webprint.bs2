<?php namespace Vsb\Store;

use System\Classes\PluginBase;

class Plugin extends PluginBase{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'location' => [
                'label'       => 'vsb.store::lang.plugin.name',
                'description' => '',
                'category'    => 'vsb.store::lang.plugin.settings',
                'icon'        => 'icon-leaf',
                'class'       => 'Vsb\Store\Models\Settings',
                'order'       => 500,
            ]
        ];
    }
}
