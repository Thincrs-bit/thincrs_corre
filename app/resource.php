<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resource extends Model
{
    protected $table = 'resource';
    protected $fillable = [
        'id', 'name', 'url','language','created_at', 'updated_at'
    ];
   
}
