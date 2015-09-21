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
            $S_SESSION['LoginSession']= false;
        }
        
    }

    public function conversion($loginuser, $loginpassword) 
    {
       trim($loginuser);                                  // omvandlar och instansiera nya variabler
       trim($loginpassword);                       
       //$message = "";                                                  
                if($loginuser == "" && $loginpassword == "")
               {
               throw new Exception("username and password missing");                         // korrekt 
               }
               else if($loginuser ==="")
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
               
               else if(isset($S_SESSION['LoginSession'])&&$S_SESSION['LoginSession'] == true)                      // kasta undantag om det är en repost meddelandet genom att kasta undatag
               {                                                                                                    // tomt error meddelandet sätts i statusen
                   throw new Exception();                      
               }
               else
               {
                   $S_SESSION['LoginSession'] = true;
               }
               
               
               
              
             
                
       
        
    
    
      
                                                               //omvandlar och skapa nya instansier 
         $this->message = $message;
        
        
     
   }
    public function returnMessage()
    {
        return $this->message;                          // acess metoden för att returnera meddelandet
  
    }
}
