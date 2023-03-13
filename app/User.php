<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Vinkla\Hashids\Facades\Hashids;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getReferralLinkAttribute()
    {
        $ref_id = Hashids::encode($this->id);
        return $this->referral_link = route('register', ['ref' => $ref_id]);
    }

    public function referralCode(){
        return Hashids::encode($this->id);
    }

    public function verifiedUser()
    {
        if ($this->email_verified_at != null)
        {
            return "<span class='user-status user-status-verified'>Verified</span>";
        }
        return "<span class='user-status user-status-unverified'>Unverified</span>";
    }

    public function status()
    {
        if ($this->status < 0){
            return "<span class='badge bg-danger text text-uppercase'>Inactive</span>";
        }elseif ($this->status >= 0){
            return "<span class='badge bg-success text text-uppercase'>Active</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }

    public function purchased_stocks()
    {
        return $this->hasMany(PurchasedStock::class, 'user_id');
    }

    public function payment_method()
    {
        return $this->hasMany(PaymentMethod::class, 'user_id');
    }
    public function funding()
    {
        return $this->hasMany(Funding::class, 'user_id');
    }
}
