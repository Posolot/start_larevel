<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'email', 'password'];

    public function birthdays()
    {
        return $this->hasMany(Birthday::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($user) {
            if ($user->isForceDeleting()) {
                $user->birthdays()->forceDelete();
            } else {
                $user->birthdays()->delete();
            }
        });
    }
}

