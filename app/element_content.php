<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class element_content extends Model
{
    protected $table = 'element_content';
    protected $fillable = [
       'id', 'content_id', 'element_id', 'weight'
    ];
    public $timestamps=false;
    
    
    // public function elements(){

    //     return $this->belongsToMany(element::class);
    // }

    // public function diagram_elements(){

    //     return $this->belongsToMany(diagram_element::class);
    // }
}
