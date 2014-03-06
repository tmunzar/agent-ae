<?php

class SessionsController extends BaseController {

	/**
	 * Show the login form
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();


		 $credentials = array(
        	'email' => $input['email'],
			'password' => $input['password'],
    	);

    	// Try to authenticate the user
    	$attempt = Sentry::authenticate($credentials, false);

		if ($attempt) return Redirect::intended('/');

		return Redirect::back()->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Sentry::logout();
		return Redirect::home();
	}

}