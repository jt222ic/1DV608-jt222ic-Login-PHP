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
        { 
            try
            {
            
            $this->loginuser = $this->view->GetUsername();
            $this->loginpassword = $this->view->GetPassword();
            $this->model->conversion($this->loginuser, $this->loginpassword);
            $this->view->WelcomeText();                              // välkom texten ska komma då man submittar 
            
            }
           catch(EXCEPTION $e)                                     // kastar till response meddelandet
           {
               $this->view->StatusMessage($e->getMessage());                         //skicka in status meddelandet till Getmessage.
           }                                             //submit vid start men Checklogin kommer in senare om man klickar in på submit
           
        }
        
         if($this->view->logout())
        {
            try {     
                
                $this->model->LogoutSystem();
                $this->view->ByeByeText();
                
                
            
                }
              catch(EXCEPTION $e) {
                         
                       $this->view->StatusMessage($e->getMessage()); 
                     }
        }
        
        
       
                 
    
    
    
     
    
    }
    
     
            
            
            
        
    
    
    
  

}