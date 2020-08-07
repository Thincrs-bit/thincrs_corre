<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagram extends Model
{
    protected $table = 'diagram';
    protected $fillable = [
        'id', 'name', 'description','diagram_type_id', 'status_id'
    ];
    public $timestamps=false;
}
