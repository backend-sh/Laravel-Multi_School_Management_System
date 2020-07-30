<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cache;
/**
 * Class User
 * @package App\Models
 * @version September 18, 2019, 7:47 pm UTC
 *
 * @property string name
 * @property string email
 * @property integer role_id
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'role_id',
        'teacher_id',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'role_id' => 'integer',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'role_id' => 'required',
        'password' => 'required'
    ];

    // protected $with=['role'];
     /**
     * Get the user that owns the phone.
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role'); // here is our relationship for the users okay
    }

    public function isOnline(){ // THIS IS THE FUNCTION THAT WE CALLED INSIDE THE TEACHER ONLINE TBALE OKAY

        return Cache::has('user-online' . $this->id);// is the current login user id okay.

        //now we will create one file for the online users okay.
        //i have alreay created it let me show you to guys

	}

}
