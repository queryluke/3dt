<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /***********************************
     * ATTRIBUTES
     ***********************************/
    protected $casts = [
        'agree_terms' => 'boolean',
        'can_share' => 'boolean',
        'cdr_deposit' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'description',
        'requirements',
        'needed_by',
        'agree_terms',
        'can_share',
        'cdr_deposit',
    ];

    /***********************************
     * RELATIONSHIPS
     ***********************************/
    public function patron(){
        return $this->belongsTo('App\Patron');
    }

    public function items(){
        return $this->hasMany('App\Item');
    }

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
