<?php
App::uses('AppController', 'Controller');

class ModelosController extends AppController {

/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		
	}

/************************************************************/

public function agregar(){


	
	if ($this->request->is('post')) {
		$this->Modelo->create();
		if ($this->Modelo->save($this->request->data)) {
			$this->Session->setFlash('Tu modelo se agrego éxitosamente');
			return $this->redirect('/modelos/');
		}
		$this->Session->setFlash('Ocurrió un problema agregando el modelo');
	}

	$lstTipos=$this->Modelo->Tipo->find('list');
	$this->set('lstTipos',$lstTipos);

}


/************************************************************/

public function index(){
	
	$data=$this->Modelo->find('all');
	$this->set('data' , $data);
	
	
}

/************************************************************/

public function ver ($id){
	$this->Modelo->recursive=3;
	if($data=$this->Modelo->findById($id)){
		$this->set('data',$data);
		}
	else
	{
		$this->Session->setFlash('No se encontro el ID de este modelo');
		$this->redirect('/modelos/');
	}



}

/************************************************************/


public function eliminar($id){

	if($this->Modelo->delete($id)){
			$this->Session->setFlash('El modelo se borro corrextamente');
			$this->redirect('/modelos/');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar este modelo');
		$this->redirect('/modelos/');


}

}
