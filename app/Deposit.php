<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transId()
    {
        return "#TNX43265".$this->id;
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, "payment_method_id");
    }

    public function status()
    {
        if ($this->status == 1)
        {
            return '<span class="badge bg-success">Successful</span>';
        }
        return '<span class="badge bg-warning">Pending</span>';
    }
}
