<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
    /***********************************
     * ATTRIBUTES
     ***********************************/

    /***********************************
     * RELATIONSHIPS
     ***********************************/
    public function items()
    {
        return $this->hasManyThrough('App\Item','App\Job');
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
