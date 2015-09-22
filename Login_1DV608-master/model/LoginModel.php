<?php

class LoginModel {

    //private static $Message = "";
    private  $loginuserModel;
    private $loginpasswordModel;
    
    
    private static $FullUsername = "Admin";                /// varför statiska???? för att alla medlemmar ska komma åt? //
    private static $FullPassword = "Password";
    
  
    
    private $messageModel;
    
    
    public function __construct(){
        
        if(!isset($_SESSION['LoginSession']))
        {
            $_SESSION['LoginSession'] = false;
        }
        
    }

    public function conversion($loginuser, $loginpassword) 
    {
       trim($loginuser);                                             // omvandlar och instansiera nya variabler
       trim($loginpassword);                       
                                                                                        //$message = "";                                                  
                
                if($loginuser ==="")
               {
                   throw new Exception("username is missing");
               }
               else if ($loginpassword ==="")
               {
                  throw new Exception("password is missing");
               }
               else if($loginuser != self::$FullUsername || $loginpassword != self::$FullPassword)
               {
                  throw new Exception("Wrong Username and password"); 
                   
               }
               
               
             else  if($_SESSION['LoginSession'] &&$_SESSION['LoginSession'] == true)                      // kasta undantag om det är en repost meddelandet genom att kasta undatag
              {                                                                                                    // tomt error meddelandet sätts i statusen
                  throw new Exception();                      
              }

              else
                 {
                  $_SESSION['LoginSession'] = true;
                  
                 }
                 return $_SESSION['LoginSession'];
   }
   
   public function LoginSubmit(){
       
       if($_SESSION['LoginSession'])
       {
           
           return $_SESSION['LoginSession'];
       }
      
       
       return false;
       
       
       
   }
   
   
//   public function LogoutSystem(){
       
//       if(!$_SESSION['LoginSession'])
//       {
           
//       }
   
//   }
   
   
   
}
