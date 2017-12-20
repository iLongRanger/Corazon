<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreEmployment extends Model
{
    //
    protected $table = 'rj201002';

    protected $fillable = [
        'fileNo', 'name', 'applicationForm', 'resume', 'NBI', 'healthCert','brgyClearance','birthCert','marrigeCert', 'status',  '',
    ];

    public function personal(){
        return  $this->belongsTo('App\Personal');
    }
    public function initial(){
        return  $this->belongsTo('App\InitialRequirements');
    }
}
