<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        'photo_id','lastname','firstname','middlename','street','houseno','city','region','brgy',
        'zipcode', 'birthdate', 'birthplace', 'marital_id', 'aphone','phone', 'hphone', 'email',
        'facebook', 'ename', 'relationship', 'eaddress', 'econtact','ealcontact','employeeid', 'role_id','started_date', 'department_id', 'salary', '',
    ];

   


    public function role(){

        return $this->belongsTo('App\Role');
    }
    public function photo(){

        return  $this->belongsTo('App\Photo');
    }
    public function department(){
        return  $this->belongsTo('App\Department');
    }
}
