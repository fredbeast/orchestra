<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'url', 'types', 'description', 'thumb_col', 'thumb_pen', 'img_lg'
    ];
}
