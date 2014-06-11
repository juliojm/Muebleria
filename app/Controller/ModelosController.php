<?php
App::uses('AppController', 'Controller');

class ModelosController extends AppController {

/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		
	}

/************************************************************/

public function registrar(){


	
	if ($this->request->is('post')) {
		$this->Modelo->create();
		if ($this->Modelo->save($this->request->data)) {
			$this->Session->setFlash('Tu modelo se agrego éxitosamente');
			return $this->redirect('/modelos/index');
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

/*****************************************************************************************************/
								/*Por Julio */
	public function ver($id){	

	$this->Modelo->recursive=3;
	if($data=$this->Modelo->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de este Modelo');
			$this->redirect('/modelos/');
		}
		
}	
/*****************************************************************************************************/	
									/*Por Julio */
	public function eliminar($id){
	
		if($this->Modelo->delete($id)){
			$this->Session->setFlash('Este Modelo se borro correctamente');
			$this->redirect('/modelos/index');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar este Modelo');
		$this->redirect('/modelos/index');
		
		
}
/*****************************************************************************************************/

}
