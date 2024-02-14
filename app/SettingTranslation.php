<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
     public $timestamps = false;
    protected $fillable = ['id', 'setting_id', 'locale', 'title', 'content', 'address'];
}
