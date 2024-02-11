<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'so_title', 'so_discription', 'so_image','so_p_status',
    ];
}
