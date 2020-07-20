<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content_challenge extends Model
{
    protected $table = 'content_challenge';
    protected $fillable = [
        'content_challengecol', 'content_id', 'challenge_id','position'
    ];
    public $timestamps=false;
}
