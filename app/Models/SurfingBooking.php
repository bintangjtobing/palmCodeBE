<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurfingBooking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'visit_date',
        'desired_board',
        'surfing_experience',
    ];

    /**
     * Get the member that owns the surfing booking.
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}