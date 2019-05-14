<?php

namespace dzuko;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id',  'description', 'price', 'image'
    ];
}
