<?php

namespace App\Http\View\Composer;

use App\chanel;
use Illuminate\View\View;

class ChannelComposer
{
    public function compose(View $view)
    {
        $view->with('channel',chanel::orderBy('name','DESC')->get());
    }
}
