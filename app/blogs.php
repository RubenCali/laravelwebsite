<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $fillable = ['titel', 'autheur', 'shortDES', 'longDES', 'datum', 'plaats', 'image'];
}
