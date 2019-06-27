<?php

namespace Subsider\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use Subsider\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJokeCommand extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output a funny Chuck Norris joke.';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}