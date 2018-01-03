<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $table = 'healthcerts';
    protected $uploads = '/health/';
    protected $fillable = ['file'];

    public function getFileAttribute($health){
        return $this->uploads .$health;
    }
}
