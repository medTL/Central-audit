<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snort extends Model
{
    //
    protected $fillable = [
        'type', 'protocol', 'source_ip','port','message'
    ];

}
