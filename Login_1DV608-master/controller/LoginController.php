<?php



class LoginController{
    
     private $lv;
     private $loginuser;
     private $Loginpassword;
     private $view;
     private $model;
     
 
 
     public function __construct($v, $lm)
     
     {
         $this->view = $v;
         $this->model =$lm;
         
         
     }
 
 
 
         
    
    public function submit()
    {
        if($this->view->checkLogin())   //     tryckt på submit knappe
        { echo "standby";
            try
            {
            
            $this->loginuser = $this->view->GetUsername();
            $this->loginpassword = $this->view->GetPassword();
            $this->model->conversion($this->loginuser, $this->loginpassword);
            
            
            }
           catch(EXCEPTION $e)                                     // kastar till response meddelandet
           {
               $this->view->StatusMessage($e->getMessage());                         //skicka in status meddelandet till Getmessage.
           }//submit vid start men Checklogin kommer in senare om man klickar in på submit
           
        }
        else{
            echo "Hello";
        }
    
                 
    
    
    
     
    
    }
    
    
  

}