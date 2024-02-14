<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Tag extends Model implements TranslatableContract
{
     use Translatable;

    protected $table='tags';
    
    public $translatedAttributes = ['title']; // colums that will translation in category_translations table
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at'];
    public $timestamps = false;
}
