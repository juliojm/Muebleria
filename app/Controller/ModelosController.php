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



}
