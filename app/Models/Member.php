<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'country_id',
        'whatsapp_number',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function surfingBooking(): HasOne
    {
        return $this->hasOne(SurfingBooking::class);
    }

    public function idVerification(): HasOne
    {
        return $this->hasOne(IDVerification::class);
    }
}