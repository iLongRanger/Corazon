<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'name', 'address', 'contact','email','photo_id','',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function photo(){

        return  $this->belongsTo('App\Photo');
    }
}
