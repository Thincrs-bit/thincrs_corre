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

    // public function diagram_element (){

    //     return $this->hasOne('App\diagram_element');
    // }

    // public function competences (){

    //     return $this->belongsToMany('App\competence');
    // }
    public function elements (){

        return $this->belongsToMany(element::class);
    }

}
