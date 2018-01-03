<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $table = 'brgy';
    protected $uploads = '/brgy/';
    protected $fillable = ['file'];

    public function getFileAttribute($brgy){
        return $this->uploads.$brgy;
    }
}
