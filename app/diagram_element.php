<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagram_element extends Model
{
    protected $table = 'diagram_element';
    protected $fillable = [
        'id','element_id', 'diagram_id', 'position'
    ];
    public $timestamps=false;
    
    public function diagrams (){

        return $this->belongsTo(diagram::class);

    }

  


}
