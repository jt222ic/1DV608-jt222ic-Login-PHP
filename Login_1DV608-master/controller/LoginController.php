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
        if($this->view->checkLogin())
        {
            $this->loginuser = $this->view->GetUsername();
            $this->loginpassword = $this->view->GetPassword();
            $this->model->conversion($this->loginuser, $this->loginpassword);
            
            echo "standby";                             //submit vid start men Checklogin kommer in senare om man klickar in på submit
           
        }
        else{
            echo "Hello";
        }
    
                 
    
    
    
     
    
    }
    
    
  

}