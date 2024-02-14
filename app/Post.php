<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Post extends Model implements TranslatableContract
{

    use Translatable;

    protected $table='posts';
    
    public $translatedAttributes = ['title', 'content','smalldesc']; // colums that will translation in category_translations table
    protected $fillable = ['id', 'image', 'category_id', 'created_at', 'updated_at', 'deleted_at'];
    public $timestamps = false;
}
