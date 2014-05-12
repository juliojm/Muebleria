<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $scaffold;
	public $components=array('Auth','Session');
	public function beforeFilter(){
		$this->Auth->allow('index','view','add','edit','delet');
	
	}
}
