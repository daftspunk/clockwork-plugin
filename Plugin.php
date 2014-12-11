<?php

namespace Qub\Clockwork;

use System\Classes\PluginBase;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\AliasLoader;

class Plugin extends PluginBase
{
    use \System\Traits\ConfigMaker;

    public function pluginDetails()
    {
        return [
            'name'        => 'Qub.Clockwork',
            'description' => 'Clockwork',
            'author'      => 'Andriy Kuzyk',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
        App::register( 'Clockwork\Support\Laravel\ClockworkServiceProvider' );

        $alias = AliasLoader::getInstance();
        $alias->alias( 'Clockwork', 'Clockwork\Support\Laravel\Facade' );
    }
}
