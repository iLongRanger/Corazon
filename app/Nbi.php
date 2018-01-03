<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nbi extends Model
{
    protected $table = 'nbi';
    protected $uploads = '/nbi/';
    protected $fillable = ['file'];

    public function getFileAttribute($nbi){
        return $this->uploads.$nbi;
    }

}
