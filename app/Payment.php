<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      'method',
      'name',
      'apartment_id'
    ];

    public function apartment(){
      return $this->belongsTo('App\Apartment');
    }
}
