<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //

    protected $table = 'rj201001';


    protected $fillable = [
   'id_number', 'name', 'photo_id', 'contactNumber', 'address', 'birthday','email', '',
    ];

    public function photo(){

        return  $this->belongsTo('App\Photo');
    }

    public function pre_employment(){
        return  $this->belongsTo('App\PreEmployment');
    }

}
