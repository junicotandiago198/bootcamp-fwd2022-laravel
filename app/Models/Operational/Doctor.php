<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare tab
    public $table = 'doctor';

    // this field must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function specialist()
    {
        // 3 parameters (path model, field foreign key, field primary key from table hasmany/hasone)
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }

    // one to many
    public function appointment()
    {
        // 2 parameters (path model, field foreign key)
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}
