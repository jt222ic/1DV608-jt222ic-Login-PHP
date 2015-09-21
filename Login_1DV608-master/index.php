<?php


session_start();                             // startar session först
//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');
require_once('model/LoginModel.php');
require_once('controller/LoginController.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//CREATE OBJECTS OF THE VIEWS
$lm = new LoginModel();
$v = new LoginView($lm);

$dtv = new DateTimeView();
$lv = new LayoutView();

$lc = new LoginController($v, $lm);

$lc->submit();





//var_dump($checklogin);



$lv->render(false, $v, $dtv);     // ska säga att det blir true

