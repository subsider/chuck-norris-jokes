<?php

namespace Subsider\ChuckNorrisJokes\Facades;

use Illuminate\Support\Facades\Facade;

class ChuckNorris extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'chuck-norris';
    }
}
