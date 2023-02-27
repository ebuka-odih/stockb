<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [];

    public function getLogoAttribute()
    {
        if (! $this->attributes['logo']) {
        return '/default_stock.jpg';
        }
        return $this->attributes['logo'];
    }

    public function purchase_stock()
    {
        return $this->hasMany(PurchasedStock::class, 'stock_id');
    }

}
