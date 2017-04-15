<?php

namespace App\Http\Controllers;

use App\Notifications\NewRegisterNotification;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;
use Modules\Users\Entities\UserModel;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Password;
use Illuminate\Contracts\Auth\PasswordBroker;

class Auth extends Controller
{
	use ResetsPasswords, Notifiable;
	
	public $redirectPath = (('homepage'));
	
	public function __construct(Guard $auth, PasswordBroker $passwords)
	{
		
		$this->auth = $auth;
		$this->passwords = $passwords;
		$this->subject = 'Your Password Reset Link';
		
	}
	
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($params = '')
    {
        //
		if (\Auth::check()) {
			return view('auth.already_logged_in');
		}
		
		$userroles = $this->userrole_arr();
		return view('auth.login-register-form', compact('userroles', 'params'));
    }
	
	public function logout()
	{
		\Auth::logout();
		return redirect(route('homepage'));
	}
    
    protected function userrole_arr(){
    	return [
			'auctioneer'	=> 'Auctioneer',
			'bidder'		=>	'Bidder'
		];
	}
	
	//check login data and Login to user and create sessions
	public function do_login (Request $request)
	{
		$this->validate($request, [
			'username' => 'required|max:255|min:3',
			'password' => 'required|max:255|min:5'
		]);
		
		
		\Auth::attempt([
				'username' => $request->username,
				'password' => $request->password,
			]);
		
		
		if (\Auth::check())
			return redirect(route('homepage'));
		
		$wrong_credentials = true;
		
		return redirect(route('login', ['wrong_credentials' => $wrong_credentials]));
		
	
	}
	
	// Store register data into database and send success message.
	public function do_register (Request $request)
	{
		$validationArr = [
			'username'         => 'required|max:60|min:3|unique:users,username',
			'full_name'        => 'max:255|min:2',
			'email'            => 'required|max:255|email|unique:users,email',
			'cnic'             => 'max:15',
			'contact'   => 'max:255',
			'user_role'        => 'required',
			'password'         => 'required|max:60|same:conf-password',
			'conf-password' => 'required|max:60|same:password',
			'url'              => 'max:255'
		
		];
		
		// validating input form
		$this->validate($request, $validationArr);
		
		$user = new UserModel();
		
		$user->full_name = $request->full_name;
		$user->username = $request->username;
		$user->email = $request->email;
		$user->cnic = $request->cnic;
		$user->contact_number = $request->contact;
		$user->password = Hash::make($request->password);
		$user->url = $request->url;
		$user->user_role = $request->user_role;
		$user->status = 'open';
		$user->remember_token = '';
		
		$is_saved = $user->save();
		$user_saved = $is_saved ? true : false;
		
		
		$user->notify(new NewRegisterNotification());
		
		
		if ($user_saved)
			return view('auth.successfully_registered');
		
		throw new Exception("Unknown error at time of registration.");
		
    }
	
    // show form for reset account
	public function show_reset_form ()
	{
		return view('auth.show_reset_form');
    }
	
	// handle reset on Post request
	public function do_reset(Request $request)
	{
		$response = $this->passwords->sendResetLink($request->only('email'));
		
		
		switch ($response)
		{
			case PasswordBroker::RESET_LINK_SENT:
				return redirect()->back()->with('status', trans($response));
			
			case PasswordBroker::INVALID_USER:
				return redirect()->back()->withErrors(['email' => trans($response)]);
		}
		
		throw new Exception("Unknown State at time of reset.");
	}
	
	/**
	 * Reset the given user's password.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postReset(Request $request)
	{
		return $this->reset($request);
	}
	
	/**
	 * Get the broker to be used during password reset.
	 *
	 * @return string|null
	 */
	public function getBroker()
	{
		return property_exists($this, 'broker') ? $this->broker : null;
	}
	
	
	public function reset(Request $request)
	{
		/*$this->validate(
			$request,
			$this->getResetValidationRules(),
			$this->getResetValidationMessages(),
			$this->getResetValidationCustomAttributes()
		);*/
		
		$credentials = $this->getResetCredentials($request);
		
		$broker = $this->getBroker();
		
		$response = Password::broker($broker)->reset($credentials, function ($user, $password) {
			$this->resetPassword($user, $password);
		});
		
		
		
		switch ($response) {
			case Password::PASSWORD_RESET:
				return $this->getResetSuccessResponse($response);
			default:
				return $this->getResetFailureResponse($request, $response);
		}
	}
	
	/**
	 * Get the password reset validation rules.
	 *
	 * @return array
	 */
	protected function getResetValidationRules()
	{
		return [
			'token' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed|min:7',
		];
	}
	
	/**
	 * Get the password reset validation messages.
	 *
	 * @return array
	 */
	protected function getResetValidationMessages()
	{
		return [];
	}
	
	/**
	 * Get the password reset validation custom attributes.
	 *
	 * @return array
	 */
	protected function getResetValidationCustomAttributes()
	{
		return [];
	}
	
	/**
	 * Get the password reset credentials from the request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	protected function getResetCredentials(Request $request)
	{
		return $request->only(
			'email', 'password', 'password_confirmation', 'token'
		);
	}
	
	/**
	 * Reset the given user's password.
	 *
	 * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
	 * @param  string  $password
	 * @return void
	 */
	protected function resetPassword($user, $password)
	{
		$user->forceFill([
							 'password' => bcrypt($password)
						 ])->save();
		
	}
	
	/**
	 * Get the response for after a successful password reset.
	 *
	 * @param  string  $response
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	protected function getResetSuccessResponse($response)
	{
		return redirect($this->redirectPath())->with('status', trans($response));
	}
	
	/**
	 * Get the response for after a failing password reset.
	 *
	 * @param  Request  $request
	 * @param  string  $response
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	protected function getResetFailureResponse(Request $request, $response)
	{
		return redirect()->back()
			->withInput($request->only('email'))
			->withErrors(['email' => trans($response)]);
	}
	
	public function showResetForm(Request $request, $token = null)
	{
		
		if (is_null($token)) {
			return $this->getEmail();
		}
		
		
		
		$email = $request->input('email');
		
		
		
		
		return view('auth.do-reset')->with(compact('token', 'email'));
		
		
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
