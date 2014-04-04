<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	

	private $rules = array(
		//rules for validation of each field
		'username' => 'required|unique:users',
		'email' => 'required|email|unique:users',
		'password' => 'required|confirmed'
	);

	//errors for validation
	private $errors;

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function validate($data)
	{
		// new validator object
		$v = Validator::make($data, $this->rules);
		
		if($v->fails())
		{
			//a rule was broken. send back with errors.
			$this->errors = $v->messages();
			return false;
		}
		
		//if it didn't fail, it passes!
		return true;

	}

	public function messages()
	{
		return $this->errors;
	}
	
	// User has many shoppinglist.
	public function shoppinglists()
	{
		return $this->hasMany('Shoppinglist');
	}

}
