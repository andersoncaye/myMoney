<?php

namespace App;

use SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
