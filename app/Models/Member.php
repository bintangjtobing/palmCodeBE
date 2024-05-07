<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Member extends Authenticatable
{
    use HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'country',
        'whatsapp_number',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the surfing bookings for the member.
     */
    public function surfingBooking(): HasOne
    {
        return $this->hasOne(SurfingBooking::class);
    }

    /**
     * Get the ID verification record associated with the member.
     */
    public function idVerification(): HasOne
    {
        return $this->hasOne(IDVerification::class);
    }
}