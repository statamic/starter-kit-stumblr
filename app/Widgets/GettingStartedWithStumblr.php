<?php

namespace App\Widgets;

use Statamic\Widgets\Widget;

class GettingStartedWithStumblr extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $posts = \Statamic\Facades\Entry::query()->where('collection', 'psts')->count();

        return view('widgets.getting-started', compact('posts'));
    }
}
