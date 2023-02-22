<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Declare tab
    public $table = 'type_user';

    // this field must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function detail_user()
    {
        // 2 parameters (path model, field foreign key)
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
}
