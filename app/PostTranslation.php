<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
     public $timestamps = false;
    protected $fillable = ['id', 'post_id', 'locale', 'title', 'content', 'smalldesc'];
}
