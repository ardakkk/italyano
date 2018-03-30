<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Pizza extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Pizza::count();
        $string = 'Pizzas';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pizza',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('Pizza'),
                'link' => route('voyager.admin.Pizzas'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }
}
