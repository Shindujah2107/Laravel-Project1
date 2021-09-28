<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentRecord extends Model
{
    public $timestamps = false;

    protected $fillable = ['doctor_id','patient_id','fullname','nic','date','description'];
    protected $primarykey = 'record_id';
}
