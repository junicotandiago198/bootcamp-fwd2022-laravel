<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigPayment extends Model
{
    // use HasFactory;

    use SoftDeletes;

    // Declare tab
    public $table = 'config_payment';

    // this field must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
