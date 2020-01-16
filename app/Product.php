<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';


    public function getPrice()
    {
            $price = $this->price / 100;

            return number_format($price, 2, ', ', ' ') . ' €';
    }
}
