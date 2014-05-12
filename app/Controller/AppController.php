<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
<<<<<<< HEAD

	public $components	=	array('Auth','Session');
	public function beforeFilter(){
			
	}
	
	
=======
	public $scaffold;
	public $components=array('Auth','Session');
	public function beforeFilter(){
		$this->Auth->allow('index','view','add','edit','delet');
	
	}
>>>>>>> 39a25622de94c0b4193a12b14ebf3cfe1d656352
}
