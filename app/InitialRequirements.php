<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InitialRequirements extends Model
{
    protected $table = 'initials';

    protected $uploads = '/initial/';

    protected  $fillable = ['file'];

    public function getFileAttribute($initial)
    {

        return $this->uploads . $initial;
    }
}
