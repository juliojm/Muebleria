<?php
App::uses('AppController', 'Controller');

class SuppliersController extends AppController {

	 /* CONTROLODADOR ELABORADO POR  --JULIO--*/

/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
		
	}
/*****************************************************************************************************/

	public function index(){
		$data = $this->Supplier->find("all");	
		$this->set('data' , $data);
	}

/*****************************************************************************************************/

	public function registrar(){
		if ($this->request->is('post')) {
			$this->Supplier->create();
			if ($this->Supplier->save($this->request->data)) {
				$this->Session->setFlash('Este Supplier se ha registrado con éxito');
				$this->redirect('/suppliers/index');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de registrar este Supplier.');
		}
	}



/*****************************************************************************************************/

	public function ver($id){	

	if($data=$this->Supplier->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de este Supplier');
			$this->redirect('/suppliers/');
		}
		
}	

/*****************************************************************************************************/
	public function borrar($id){
	
		if($this->Supplier->delete($id)){
			$this->Session->setFlash('Este Supplier se borro corrextamente');
			$this->redirect('/suppliers/index');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar este Supplier');
		$this->redirect('/suppliers/index');
		
}

/*****************************************************************************************************/
	public function editar($id=-9999999){
	
		if ($id==-9999999){
			$this->Session->setFlash('Necesitas especificar un Supplier');
			$this->redirect('/suppliers/index');
		}
		if ($this->request->is('post')) {
			$this->Supplier->id=$id;
			if($this->Supplier->save($this->request->data)){
				$this->Session->setFlash('El regsitro se ha modificado exitosamente');
				$this->redirect('/suppliers/');
			}
			$this->Session->setFlash('Ocurrio un problema al modificar el registro');
		}
		if($data=$this->Supplier->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro a este supplier');
			$this->redirect('/suppliers/');
		}
			
	
	}
}
	
/***************************************************************************************************/

