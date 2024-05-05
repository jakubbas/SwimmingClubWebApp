<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galas extends Model
{
    use HasFactory;

    protected $table = "gala_results";
    protected $fillable = [
        'user-id',
        'gala-date',
        'swim-type',
        'time',
        'place',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false; // Disable timestamps for this model

}
