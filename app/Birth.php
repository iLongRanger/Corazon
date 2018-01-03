<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{
    protected $table = 'birthCert';
    protected $uploads = '/birth/';
    protected $fillable = ['file'];

    public function getFileAttribute($birth){
        return $this->uploads.$birth;
    }
}
