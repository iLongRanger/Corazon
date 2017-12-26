<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationForms extends Model
{
    //
    protected $table = 'applicationforms';
    protected $uploads = '/applicationForms/';
    protected $fillable = ['file'];

    public  function getFileAttribute($application){
        return $this->uploads.$application;
}
}
