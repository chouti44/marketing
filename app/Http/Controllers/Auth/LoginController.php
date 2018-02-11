<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Contracts\Auth\Authenticatable;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Redirect the user to the github authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProviderGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from twitter.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackGitHub()
    {
        $userSocial = Socialite::driver('github')->user();

        // return $userSocial->name;

        $findUser = User::where('email', $userSocial->email)->first();
        if($findUser){
            Auth::login($findUser);

            return 'déjà inscrit';
        } else {
            $user = new User;

            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            /* $user->github_id = $userSocial->github_id;
            $user->provider_id = $userSocial->provider_id;
            $user->provider = $userSocial->provider; */
            $user->save();
            Auth::login($userSocial->email);

            return 'vous êtes inscrite';
        }
    }

    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from twitter.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackFacebook()
    {
        $userSocial = Socialite::driver('facebook')->user();

        // return $userSocial->name;

        $findUser = User::where('email', $userSocial->email)->first();
        if($findUser){
            Auth::login($findUser);

            return 'déjà inscrit';
        } else {
            $user = new User;

            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            /* $user->facebook_id = $userSocial->facebook_id;
            $user->provider_id = $userSocial->provider_id;
            $user->provider = $userSocial->provider; */
            $user->save();
            Auth::login($userSocial->email);

            return 'vous êtes inscrite';
        }
    }

    /**
     * Redirect the user to the twitter authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProviderTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from twitter.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackTwitter()
    {
        $userSocial = Socialite::driver('twitter')->user();

        // return $userSocial->name;

        $findUser = User::where('email', $userSocial->email)->first();
        if($findUser){
            Auth::login($findUser);

            return 'déjà inscrit';
        } else {
            $user = new User;

            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            /* $user->twitter_id = $userSocial->twitter_id;
            $user->provider_id = $userSocial->provider_id;
            $user->provider = $userSocial->provider; */
            $user->save();
            Auth::login($userSocial->email);

            return 'vous êtes inscrite';
        }
    }

}
