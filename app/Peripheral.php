<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peripheral extends Model
{
    protected $fillable=[
        'uid',
        'vendor',
        'status',
        'gateway_id',
    ];
    public function gateway(){
        return $this->belongsTo('App\Gateway', 'gateway_id');
    }
}
