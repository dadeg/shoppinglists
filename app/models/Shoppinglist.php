<?php

class Shoppinglist extends Eloquent
{
	private $rules = array(
		//rules for validation of each field
		'name' => 'required'
	);

	private $errors;

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

	// shoppinglist belongs to user.
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function isAuthor($user)
	{
		if($this->user_id != $user)
		{		
			return false;
		}
		
		// the user is the author. allow.
		return true;
	}
}
