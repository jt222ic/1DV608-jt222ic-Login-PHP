<?php

class LoginModel {

    //private static $Message = "";
    private  $loginuserModel;
    private $loginpasswordModel;
    
    
    public static $RealUsername = 'Admin';                /// varför statiska???? för att alla medlemmar ska komma åt? //
    public static $RealPassword = 'Password';
    
  
    
    private $messageModel;
    
    
    public function __construct(){
        
        if(!isset($_SESSION['isLoggedIn']))
        {
            $_SESSION['isLoggedIn'] = false;
        }
        
    }

    public function conversion($loginuser, $loginpassword) 
    {
       trim($loginuser);                                             // omvandlar och instansiera nya variabler
       trim($loginpassword);                       
                                                                                        //$message = "";                                                  
                
                if($loginuser ==="")
               {
                   throw new Exception("Username is missing");
               }
               else if ($loginpassword ==="")
               {
                  throw new Exception("Password is missing");
               }
               else if($loginuser != self::$RealUsername || $loginpassword != self::$RealPassword)
               {
                  throw new Exception("Wrong name or password"); 
                   
               }
               
               
              else if($_SESSION['isLoggedIn'] &&$_SESSION['isLoggedIn'] == true)                      // kasta undantag om det är en repost meddelandet genom att kasta undatag
              {                                                                                                    // tomt error meddelandet sätts i statusen
                  throw new Exception();                      
              }

              else
                 {
                  $_SESSION['isLoggedIn'] = true;
                  
                 }
                 
   }
   
   public function LoginSubmit(){
       
       if($_SESSION['isLoggedIn'])
       {
           
           return $_SESSION['isLoggedIn'];
       }
       return false;
       
       
       
   }
   
   
  public function LogoutSystem(){
       
      if(!$_SESSION['isLoggedIn'])
      {
           throw new Exception();
      }
      else 
      {
          $_SESSION['isLoggedIn']=false;
      }
   
  }
   
   
   
}
