<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'comparison',
        'score',
        'totalScore',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
