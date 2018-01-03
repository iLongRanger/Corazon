<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumes extends Model
{
    //
    protected $table = 'resumes';
    protected $uploads = '/resumes/';
    protected $fillable = ['file'];

    public  function getFileAttribute($resume)
    {
        return $this->uploads . $resume;
    }
}
