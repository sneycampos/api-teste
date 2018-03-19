<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'title', 'sku', 'price', 'image', 'description' ];

    protected $hidden = [ 'created_at', 'updated_at' ];
}
