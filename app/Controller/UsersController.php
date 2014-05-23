<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

/*****************************************************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('registrar','logout','login','logear');
	}

/*****************************************************************************************************/


	public function registrar(){
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('EL usuario se ha registrado con éxito');
				$this->redirect('/users/principal');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de registrar al usuario.');
		}
}

/*****************************************************************************************************/	

	public function login(){
	
	$data = array(
			'Crear cuenta|/users/registrar',
		);
		$this->set('data',$data);
		if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->Session->setFlash("Te logueaste con éxito.");
					return $this->redirect('/');
				}
				$this->Session->setFlash("Usuario o contraseña incorrecta.");
			}

	}

/*****************************************************************************************************/

	public function logout(){
		$this->redirect($this->Auth->logout());

}

/*****************************************************************************************************/

	public function logear(){
		$this->layout='Ajax';
		$id = $this->Auth->User('id');
		$data = $this->User->findById($id);
		$this->set('data' , $data);
	}



/*****************************************************************************************************/


public function principal(){
	

	
}

public function mimuebleria(){

	
	}
}
