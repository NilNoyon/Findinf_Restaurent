<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurent extends Model
{
    protected $table = "restaurent";
    protected $primaryKey = "id";

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function preference_type()
    {
        return $this->belongsTo('App\Preference');
    }
}
