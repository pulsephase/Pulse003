<?php

class Media extends Controller{
// media controller site-tools

public function __construct($controller, $action){
parent::__construct($controller, $action);
$this->view->setLayout('default'); 

}
public function indexAction($param){
	var_dump(Session::uagent_no_version());
	$this->view->render('media/index', $param);
	echo "media/index:".$param;
	
}


}