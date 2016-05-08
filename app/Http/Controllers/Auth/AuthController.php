<?php

namespace App\Http\Controllers\Auth;

use App\models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Sentinel;
use Illuminate\Http\Request;
use Redirect;
use Hash;

class AuthController extends Controller
{
   /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

   use AuthenticatesAndRegistersUsers, ThrottlesLogins;

   /**
    * Where to redirect users after login / registration.
    *
    * @var string
    */
   protected $redirectTo = '/';

   /**
    * Create a new authentication controller instance.
    *
    * @return void
    */
   public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

   /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
   protected function validator(array $data)
    {
           return Validator::make($data, [
                   'name' => 'required|max:255',
                   'email' => 'required|email|max:255|unique:users',
                   'password' => 'required|min:6|confirmed',
               ]);
   }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
           return User::create([
                   'name' => $data['name'],
                   'email' => $data['email'],
                   'password' => bcrypt($data['password']),
               ]);
    }
  /**
   * Redirect the user to the GitHub authentication page.
   *
   * @return Response
   */

  public function redirectToProvider($driver, Request $request)
	{

    	return Socialite::with($driver)->redirect();
	}

  /**
   * Obtain the user information from GitHub.
   *
   * @return Response
   */
  	public function handleLinkedinCallback()
	{

        try {
            $provider_user = Socialite::with('linkedin')->user();
        } catch (Exception $e) {
            Log::error( $e );
            return Redirect::to('/')->with('error','Ocurrio un problema, no se ha podido iniciar sesión con Linkedin');
        }   
		
		$this->authWithProvider('linkedin', $provider_user);
	}

	public function handleFacebookCallback()
	{

        try {
            $provider_user = Socialite::with('facebook')->user();
        } catch (Exception $e) {
            Log::error( $e );
            return Redirect::to('/')->with('error','Ocurrio un problema, no se ha podido iniciar sesión con Facebook');
        }        

		$this->authWithProvider('facebook', $provider_user);
	}

	public function handleGoogleCallback()
	{

        try {
            $provider_user = Socialite::with('google')->user();
          
        } catch (Exception $e) {
            Log::error( $e );
            return Redirect::to('/')->with('error','Ocurrio un problema, no se ha podido iniciar sesión con Google');
        } 
		
		$this->authWithProvider('google', $provider_user);
	}

	public function authWithProvider($provider, $provider_user){

		$user = User::where('email','=',$provider_user->email)->first();

		if($user)
		{
	
			try
	        {
	            $auth = Sentinel::authenticate($user);
	        }
	        catch( \Cartalyst\Sentinel\Checkpoints\NotActivatedException $e){
	            return Redirect::back()->withInput()->withErrors($e->getMessage())->send();
	        }
	        catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e)
	        {
	            return Redirect::back()->withInput()->withErrors($e->getMessage())->send();
	        }catch(Exception $e)
	        {   
                Log::error( $e );
	            return Redirect::back()->withInput()->withErrors('Invalid password or email')->send();
	        }

		}else{

      /*generate random password and hash it*/
      $password = str_random(8);
      $password = Hash::make($password);
		  
      $user = Sentinel::registerAndActivate(['email' => $provider_user->getEmail() , 'password' => $password]);

      Sentinel::authenticate(['email' => $provider_user->getEmail() , 'password' => $password]);
		}

        return Redirect::route('home')->send(); 

	}

}
