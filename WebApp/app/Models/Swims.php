<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swims extends Model
{
    use HasFactory;

    protected $table = "swim_results";
    protected $fillable = [
        'user-id',
        'freestyle-time',
        'backstroke-time',
        'breaststroke-time',
    ];

    public $timestamps = false; // Disable timestamps for this model

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
