<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Employment extends Model
{
    use Notifiable;
    protected $table = 'rj201003';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'name', 'department_id', 'position_id', 'salary', 'dateHired', 'status', '',
    ];
    public function pre_employment(){
        return  $this->belongsTo('App\PreEmployment');
    }
    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function position(){
        return $this->belongsTo('App\Position');
    }
}

