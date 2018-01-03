<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    protected $table = 'marriage';
    protected $uploads = '/marriage/';
    protected $fillable = ['file'];

    public function getFileAttribute($marriage){
        return $this->uploads.$marriage;
    }
}
