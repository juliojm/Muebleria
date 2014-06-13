<?php
App::uses('AppController', 'Controller');

class MaterialsController extends AppController {

		 /* CONTROLODADOR ELABORADO POR  --JULIO--*/

/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
		
	}

/*****************************************************************************************************/
	public function index(){
		$data = $this->Material->find("all");	
		$this->set('data' , $data);
		
	}
	
/*****************************************************************************************************/
	
	public function registrar(){
	
		if ($this->request->is('post')) {
			$this->Material->create();
			if ($this->Material->save($this->request->data)) {
				$this->Session->setFlash('Este Material se ha registrado con éxito');
				$this->redirect('/materials/index');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de registrar el Material.');
		}
	
	}
	
/*****************************************************************************************************/	
	public function ver($id){	

	if($data=$this->Material->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de este Material');
			$this->redirect('/materials/');
		}
		
}	

/*****************************************************************************************************/
	public function borrar($id){
	
		if($this->Material->delete($id)){
			$this->Session->setFlash('Este Material se borro correctamente');
			$this->redirect('/materials/index');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar el Material, tal vez el ID no existe');
		$this->redirect('/materials/index');
		
		
}

/*****************************************************************************************************/
	public function editar($id=-9999999){
	
		if ($id==-9999999){
			$this->Session->setFlash('Necesitas especificar un Material');
			$this->redirect('/materials/index');
		}
		if ($this->request->is('post')) {
			$this->Material->id=$id;
			if($this->Material->save($this->request->data)){
				$this->Session->setFlash('El regsitro se ha modificado exitosamente');
				$this->redirect('/materials/');
			}
			$this->Session->setFlash('Ocurrio un problema al modificar el registro');
		}
		if($data=$this->Material->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro a este Material');
			$this->redirect('/materials/');
		}
			
	
	}
}
	
/******************************************************************************************/


