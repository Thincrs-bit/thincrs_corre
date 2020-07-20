<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class challenge extends Model
{
    protected $table = 'challenge';
    protected $fillable = [
        'id','admin_id', 'name', 'description','position'
    ];


   
    
}
