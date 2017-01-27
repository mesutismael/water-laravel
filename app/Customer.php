<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    protected $table = "customers";
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ["last_name", "first_name", "email"];
}
