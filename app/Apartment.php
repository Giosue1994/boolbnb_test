<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
      'title',
      'rooms',
      'baths',
      'beds',
      'mqs',
      'description',
      'guests',
      'user_id',
      'sponsor_id'
    ];

    public function user(){
      return $this->belongsTo('App\User');
    }
    public function images(){
      return $this->hasMany('App\Image');
    }

    public function payment(){
      return $this->hasOne('App\Payment');
    }
    public function sponsor(){
      return $this->belongsTo('App\Sponsor');
    }
    public function statistic() {
      return $this->hasOne('App\Statistic');
    }
    public function services(){
      return $this->belongsToMany('App\Service');
    }
}
