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
        'fileNo', 'name', 'applicationForm_id', 'resume_id', 'NBI_id', 'healthCert_id','brgyClearance_id','birthCert_id','marriageCert_id', 'status',  '',
    ];

    public function personal(){
        return  $this->belongsTo('App\Personal');
    }
    public function application(){

        return  $this->belongsTo('App\ApplicationForms' , 'applicationForm_id');
    }
    public function resume(){

        return  $this->belongsTo('App\Resumes' , 'resume_id');
    }
    public function nbi(){

        return  $this->belongsTo('App\Nbi' , 'NBI_id');
    }
    public function health(){

        return  $this->belongsTo('App\Health' , 'healthCert_id');
    }
    public function brgy(){
        
                return  $this->belongsTo('App\Barangay' , 'brgyClearance_id');
            }
    public function birth(){

        return  $this->belongsTo('App\Birth' , 'birthCert_id');
    }
    public function marriage(){

        return  $this->belongsTo('App\Marriage' , 'marriageCert_id');
    }
}
