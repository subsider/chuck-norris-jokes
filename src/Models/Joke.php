<?php

namespace Subsider\ChuckNorrisJokes\Models;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $table = 'jokes';

    protected $guarded = [];
}
