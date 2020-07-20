<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class element extends Model
{
    protected $table = 'element';
    protected $fillable = [
        'id', 'name', 'competence_id','element_type_id'
    ];

       
  
    public function contents (){

        return $this->belongsToMany(content::class);
    }


    


   
}
