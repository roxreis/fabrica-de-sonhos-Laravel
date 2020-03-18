<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nomeProduct', 'descProduct', 'priceProduct', 'quantProduct', 'linkProduct', 'image1', 'image2', 'image3'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'products';
}
