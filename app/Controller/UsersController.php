<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('registrar','logout','login');
	}

/************************************************************/

public function principal(){

}

public function registrar(){

}

public function logout(){

}

public function login(){

}
}