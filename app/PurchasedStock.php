<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasedStock extends Model
{
    protected $guarded = [];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
