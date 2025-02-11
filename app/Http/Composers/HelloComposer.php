<?php

namespace App\Http\Composers;

use Illuminate\View\View;


class HelloComposer
{
    public function compose(View $view)
    {
        $view->with('Composer', 'HelloComposer đã được đăng kí cho view hello');
    }
}
