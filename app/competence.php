<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class competence extends Model
{
    protected $table = 'competence';
    protected $fillable = [
        'id', 'admin_id', 'description','created_at', 'updated_at','shortname'
    ];

    // public function diagrams (){

    //     return $this->belongsToMany('App\diagram');
    // }

       

        public function element (){

            return $this->hasMany(element::class);
        }

}
