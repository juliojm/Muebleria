<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

															 /* CONTROLODADOR ELABORADO POR  --JULIO--*/

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
				$this->redirect('/users/index');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de registrar al usuario.');
		}
}

/*****************************************************************************************************/	

	public function login(){
		if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->Session->setFlash("Te logueaste con éxito.");
					return $this->redirect('/users/principal');
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
		if ($data = $this->User->findById($id))
			$this->set('data' , "<a href='/users/logout'>Cerrar sesion</a>");
		else
			$this->set('data',"<a href='/users/login'>Inicia Sesión</a>");
	}



/*****************************************************************************************************/

public function index(){

		$id = $this->Auth->User('id');
		$data = $this->User->find("all");	
		$this->set('data' , $data);
	}

/*****************************************************************************************************/
	public function ver($id){	

	if($data=$this->User->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de este usuario');
			$this->redirect('/users/');
		}
		
}	

/*****************************************************************************************************/
	public function borrar($id){
	
		if($this->User->delete($id)){
			$this->Session->setFlash('El Usuario se borro corrextamente');
			$this->redirect('/users/index');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar este usuario');
		$this->redirect('/users/index');
		
}

/*****************************************************************************************************/
	public function editar($id=-9999999){
	
		if ($id==-9999999){
			$this->Session->setFlash('Necesitas especificar un usuario');
			$this->redirect('/users/index');
		}
		if ($this->request->is('post')) {
			$this->User->id=$id;
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('El regsitro se ha modificado exitosamente');
				$this->redirect('/users/');
			}
			$this->Session->setFlash('Ocurrio un problema al modificar el registro');
		}
		if($data=$this->User->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro a este usuario');
			$this->redirect('/users/');
		}
			
	
	}
	
/*****************************************************************************************************/
	

public function principal(){
	

}

/*****************************************************************************************************/


}
