<?php

  class AuthController extends Controller{
    public function getLogin(){
      return View::make('login');
    }
    
    public function postLogin(){
      $username = Input::get('username');
      $password = Hash::make(Input::get('password'));

      //applying rules to the form fields
      $rules = array('username' => 'required', 'password' => 'required');
      $validator = Validator::make(Input::all(), $rules);

      //checking the rules from above and return error
      if($validator -> fails()){
        return Redirect::route('login')->withErrors($validator);
      }

      //check if entered data is valid, rememeber me made as false
      $auth = Auth::attempt(array(
        'name' => $username,
        'password' => $password
      ),false);

      //if data send does not match return error
      if($auth){
        return Redirect::route('login')->withErrors(array(
          'invalid credentials'
        ));
      }      
      return Redirect::route('home');
    }
  
  }

?>