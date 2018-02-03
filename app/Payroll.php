<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    //
    public function employment(){
        return $this->belongsTo('App\Employment');
    }
}
