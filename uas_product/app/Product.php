<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['kd_product','title','price','creator_id','categori_id', 'jumlah'];
}
