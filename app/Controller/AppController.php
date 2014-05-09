<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {


	public function beforeFilter(){
		public $components	=	array('Auth','Session');
		
	}
	
}
