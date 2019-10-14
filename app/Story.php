<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
 protected $fillable = ['title', 'content', 'author', 'image', 'country_id', 'user_id',];
}
