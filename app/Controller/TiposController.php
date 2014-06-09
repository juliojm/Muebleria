<?php
App::uses('AppController', 'Controller');

class TiposController extends AppController {

					 /* CONTROLODADOR ELABORADO POR  --JULIO--*/
	

/*****************************************************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		
	}
	
/*****************************************************************************************************/
	public function index(){
		$data = $this->Tipo->find("all");	
		$this->set('data' , $data);
		
	}
	
	/*****************************************************************************************************/

	public function registrar(){
	
		if ($this->request->is('post')) {
			$this->Tipo->create();
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash('Este Tipo de mueble se ha registrado con éxito');
				$this->redirect('/tipos/index');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de registrar este tipo de mueble.');
		}
	
	}
	
/*****************************************************************************************************/	
	public function ver($id){	

	if($data=$this->Tipo->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de este Mueble');
			$this->redirect('/tipos/');
		}
		
}	

/*****************************************************************************************************/
	public function borrar($id){
	
		if($this->Tipo->delete($id)){
			$this->Session->setFlash('Este Mueble se borro correctamente');
			$this->redirect('/tipos/index');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar el Tipo de mueble');
		$this->redirect('/tipos/index');
		
		
}

/*****************************************************************************************************/
	public function editar($id=-9999999){
	
		if ($id==-9999999){
			$this->Session->setFlash('Necesitas especificar un Tipo de mueble');
			$this->redirect('/tipos/index');
		}
		if ($this->request->is('post')) {
			$this->Tipo->id=$id;
			if($this->Tipo->save($this->request->data)){
				$this->Session->setFlash('El regsitro se ha modificado exitosamente');
				$this->redirect('/tipos/');
			}
			$this->Session->setFlash('Ocurrio un problema al modificar el registro');
		}
		if($data=$this->Tipo->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro a este Mueble');
			$this->redirect('/tipos/');
		}
			
	
	}
}
	
/***************************************************************************************************/