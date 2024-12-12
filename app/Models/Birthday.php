<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date_of_birth', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeInCurrentMonth($query)
    {
        return $query->whereMonth('date_of_birth', now()->month);
    }
}

