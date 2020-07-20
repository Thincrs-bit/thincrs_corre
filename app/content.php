<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = 'content';
    protected $fillable = [
        'id', 'name', 'description','content_type_id'
    ];
    
    public function challenges(){

        return $this->belongsToMany(challenge::class);
    }
}
