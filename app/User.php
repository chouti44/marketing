<?php

namespace App;

use App\Models\SocialProvider;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const NAME = 'name';
    const EMAIL = 'email';
    const PASSWORD = 'password';
    const GITHUB_ID = 'github_id';
    const FACEBOOK_ID = 'facebook_id';
    const TWITTER_ID = 'twitter_id';
    const GOOGLE_ID = 'google_id';
    const PROVIDER_ID = 'provider_id';
    const PROVIDER = 'provider';

    protected $fillable = [
        'name', 'email', 'password', 'github_id', 'facebook_id', 'twitter_id', 'google_id', 'provider_id', 'provider'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function socialProviders(){
        return $this->hasMany(SocialProvider::class);
    }
}
