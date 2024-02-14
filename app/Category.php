<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Category extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='categories';
    
    public $translatedAttributes = ['title', 'content']; // colums that will translation in category_translations table
    protected $fillable = ['id', 'image', 'parent', 'created_at', 'updated_at', 'deleted_at'];
    public $timestamps = false;
}
