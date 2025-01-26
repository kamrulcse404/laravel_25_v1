<?php

namespace App\Views\Composers;


class TestComposer
{
    public function compose($view) : void
    {
        $testComposer = "Test Composer";

        $view->with('testComposer', $testComposer);
    }
}
