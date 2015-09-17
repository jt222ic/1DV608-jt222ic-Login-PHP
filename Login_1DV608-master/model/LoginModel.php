<?php

class LoginModel {

    //private static $Message = "";
    private  $loginuserModel;
    private $loginpasswordModel;
    
  
    
    private $messageModel;
    
    
    public function __construct(){
        
    }

    public function conversion($loginuser, $loginpassword) 
    {
       trim($loginuser);                                  // omvandlar och instansiera nya variabler
       trim($loginpassword);                       
       $message = "";                                                  
                if($loginuser == "" && $loginpassword == "")
               {
               $message = "Username och Password saknas";                           // korrekt 
               }
               
               else if(!empty($loginuser && $loginpassword) && !$loginuser == "Jan" && $loginpassword =="tran")
               {
                   $message ="fel 1000%";
               }
               else if(!$loginuser == "Jan" && $loginpassword =="tran")
               {
                   $message = " vafan";
               }
               
                  else if($loginuser == "" && !$loginpassword == "")
                  {
                       $message = "Username saknas";
                   }
                    else if ($logipassword == "" && !$loginuser == "")    
                                                                                      // if empty
                   {
                   $message = "Password saknas";
               }
               
                if($loginuser == "Jan" && $loginpassword == "tran" )
                        { $message = "Right biatch!";}
                
       
        
    
    
      
                                                               //omvandlar och skapa nya instansier 
         $this->message = $message;
        
        
     
    }
    public function returnMessage()
    {
        return $this->message;
 
    }
}
