<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
      'wifi',
      'parking',
      'pets_allowed',
      'air_conditioning',
      'swimming_pool',
      'washingmachine',
      'tv',
      'kitchen',
      'breakfast',
    ];

    public function apartments(){
      return $this->belongsToMany('App\Apartment');
    }
}
