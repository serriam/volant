<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = ['to', 'from', 'package', 'info', 'time', 'instruct'];
}
