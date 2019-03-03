<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = 'posts';
    // Set Primary key
    public $primaryKey = 'id';
    // Set TimeStamps
    public $timestamps = true;
}
