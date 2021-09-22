<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use App\Traits\Kyc;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Kyc;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'otp',
        'password',
        'occupation',
        'din_no',
        'image_path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',

    ];

    public function getFirstNameAttribute()
    {
        return str_replace($this->last_name,'',$this->name);
    }

    public function getLastNameAttribute()
    {
        $names = explode(' ',$this->name);
        return count($names)>1?Arr::last($names):'';
    }

    public function kycData()
    {
        return $this->hasOne(KycData::class,'user_id');
    }

    public function assets()
    {
        return $this->hasMany(Asset::class,'user_id');
    }

}
