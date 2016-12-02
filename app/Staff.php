<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    protected $table = 'staff';

    /***********************************
     * ATTRIBUTES
     ***********************************/

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /***********************************
     * RELATIONSHIPS
     ***********************************/

    /***********************************
     * SCOPES
     ***********************************/

    /***********************************
     * METHODS
     ***********************************/

    /***********************************
     * ACCESSORS
     ***********************************/

    /***********************************
     * MUTATORS
     ***********************************/

}
