<?php

class LoginView {
	private static $login = 'LoginView::Login';                                 //döne
	private static $logout = 'LoginView::Logout';                               //döne
	private static $name = 'LoginView::UserName';                               //döne
	private static $password = 'LoginView::Password';                            //döne
	private static $cookieName = 'LoginView::CookieName';
	private static $cookiePassword = 'LoginView::CookiePassword';
	private static $keep = 'LoginView::KeepMeLoggedIn';
	private static $messageId = 'LoginView::Message';

	private $model;
	
	
	private static $BigText ='';
	


	public function __construct($lm)
	{
		$this->lm = $lm;
		
	
	}


	public function checkLogin() {
		if(isset($_POST[self::$login]))                                                                         // vill returnera en bool kolla om fälten är skriven
		{
			return true;
		}
		return false;
	}
	
	public function Logout(){
		if(isset($_POST[self::$logout]))
		{
			return true;
		}
	}


	public function GetUsername(){                       //returnera namn
		return $_POST[self::$name];
	}
	
	public function GetPassword(){                        // returnera lösenord
		return $_POST[self::$password];
	}


/**
	 * Create HTTP response
	 *
	 * Should be called after a login attempt has been determined
	 *
	 * @return  void BUT writes to standard output and cookies!
	 */
	 
	 // tar emot exception vid message skapa en funktion för det
	 
	 
	 public function StatusMessage($e)                     // tar emot exception  och Getmessage finns i Exception klassen
	 {
	 	 self::$BigText = $e;
	 }
	 
	 
	public function response() {
		
		$message = self::$BigText;
		
		
		
                                                           	//	$message = $this->lm->GetMessage();       // hämtar medlemmen från konstruktorn lm och hämta metoden som finns i lm , lm = login view($lm)
		
		
		if($this->lm->LoginSubmit() == true)
		{
		 
		$response = $this->generateLoginFormHTML($message);
		}
		else{
		$response = $this->generateLogoutButtonHTML($message);
		}
		return $response;
		
	}

	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLogoutButtonHTML($message) {
		return '
			<form  method="post" >
				<p id="' . self::$messageId . '">' . $message .'</p>
				<input type="submit" name="' . self::$logout . '" value="logout"/>
			</form>
		';
	}
	
	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLoginFormHTML($message) {
		return '
			<form method="post" > 
				<fieldset>
					<legend>Login - enter Username and password</legend>
					<p id="' . self::$messageId . '">' . $message . '</p>
					
					<label for="' . self::$name . '">Username :</label>
					<input type="text" id="' . self::$name . '" name="' . self::$name . '" value="" />

					<label for="' . self::$password . '">Password :</label>
					<input type="password" id="' . self::$password . '" name="' . self::$password . '" />

					<label for="' . self::$keep . '">Keep me logged in  :</label>
					<input type="checkbox" id="' . self::$keep . '" name="' . self::$keep . '" />
					
					<input type="submit" name="' . self::$login . '" value="login" />
				</fieldset>
			</form>
		';
	}
	
	//CREATE GET-FUNCTIONS TO FETCH REQUEST VARIABLES
	private function getRequestUserName() {
		//RETURN REQUEST VARIABLE: USERNAME
	}
	
}