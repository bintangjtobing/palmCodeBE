<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IDVerification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'id_verifications';
    protected $fillable = [
        'member_id',
        'verification_type',
        'verification_photo',
        'status',
    ];

    /**
     * Get the member that owns the ID verification.
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}