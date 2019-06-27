<?php

namespace Subsider\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Subsider\ChuckNorrisJokes\Console\ChuckNorrisJokeCommand;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJokeCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
