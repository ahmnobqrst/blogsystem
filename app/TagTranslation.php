<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
     public $timestamps = false;
    protected $fillable = ['id', 'tag_id', 'locale', 'title'];
}
