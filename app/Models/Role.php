<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version September 18, 2019, 8:02 pm UTC
 *
 * @property string name
 */
class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    public $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'school_id' => 'integer',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'school_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function permission()
    {
        return $this->hasOne('App\Permission');
    }
    
}
