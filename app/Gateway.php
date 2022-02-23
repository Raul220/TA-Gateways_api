<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    protected $fillable=[
        'serial',
        'name',
        'ipv4'
    ];

    public function peripherals(){
        return $this->hasMany('App\Peripheral');
    }
}
