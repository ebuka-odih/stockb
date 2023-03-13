<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasedCrypto extends Model
{
    protected $guarded = [];

    public function crypto()
    {
        return $this->belongsTo(Crypto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        if ($this->status < 0){
            return "<span class='badge bg-danger text text-uppercase'>Pending</span>";
        }elseif ($this->status >= 0){
            return "<span class='badge bg-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }
}
