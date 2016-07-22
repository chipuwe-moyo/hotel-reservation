<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    /* fields that can be entered by the user */
    protected $fillable = [
      'nameOfProperty', 'propertyType', 'email', 'address', 'city', 'description', 'website',
        'phone', 'rating',
    ];


}
