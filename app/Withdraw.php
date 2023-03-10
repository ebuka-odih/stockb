<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $guarded = [];

    public function transId()
    {
        return "#TNX43265".$this->id;
    }

    public function withdraw_method()
    {
        return $this->belongsTo(WithdrawMethod::class, "withdraw_method_id");
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
