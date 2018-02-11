<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class SocialProvider extends Model
{
    protected $fillable = ['providers_id', 'provider'];

    function user() {
        return $this->belongsTo(User::class);
    }
}
