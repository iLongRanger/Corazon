<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PreEmployment extends Model
{
    //
    use Notifiable;
    protected $table = 'rj201002';

    protected $fillable = [
        'fileNo', 'name', 'applicationForm_id', 'resume', 'NBI', 'healthCert','brgyClearance','birthCert','marrigeCert', 'status',  '',
    ];

    public function personal(){
        return  $this->belongsTo('App\Personal');
    }
    public function application(){

        return  $this->belongsTo('App\ApplicationForms' , 'applicationForm_id');
    }
}
