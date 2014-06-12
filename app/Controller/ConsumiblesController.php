<?php
App::uses('AppController', 'Controller');

class ConsumiblesController extends AppController {
				 /* CONTROLODADOR ELABORADO POR  --JULIO--*/

/*****************************************************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		
	}

/*****************************************************************************************************/
	public function index(){
		$data = $this->Consumible->find("all");	
		$this->set('data' , $data);
		
	}
	
/*****************************************************************************************************/
	
	public function registrar(){
		
		$lstMateriales=$this->Consumible->Material->find('list');
		$this->set('lstMateriales',$lstMateriales);
		
		$lstModelos=$this->Consumible->Modelo->find('list');
		$this->set('lstModelos',$lstModelos);
		
		if ($this->request->is('post')) {
			$this->Consumible->create();
			if ($this->Consumible->save($this->request->data)) {
				$this->Session->setFlash('Este Consumible se ha registrado con éxito');
				$this->redirect('/consumibles/index');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de registrar el Consumible.');
		}
	
	}
	
/*****************************************************************************************************/	
	public function ver($id){	

	if($data=$this->Consumible->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de este Consumible');
			$this->redirect('/consumibles/');
		}
		
}	

/*****************************************************************************************************/
	public function borrar($id){
	
		if($this->Consumible->delete($id)){
			$this->Session->setFlash('Este Consumible se borro correctamente');
			$this->redirect('/consumibles/index');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar el Consumible, tal vez el ID no existe');
		$this->redirect('/consumibles/index');
		
		

}
/*****************************************************************************************************/
	public function editar($id=-9999999){
	
		$lstMateriales=$this->Consumible->Material->find('list');
		$this->set('lstMateriales',$lstMateriales);
		
		$lstModelos=$this->Consumible->Modelo->find('list');
		$this->set('lstModelos',$lstModelos);
	
		if ($id==-9999999){
			$this->Session->setFlash('Necesitas especificar un Consumible');
			$this->redirect('/consumibles/index');
		}
		if ($this->request->is('post')) {
			$this->Consumible->id=$id;
			if($this->Consumible->save($this->request->data)){
				$this->Session->setFlash('El regsitro se ha modificado exitosamente');
				$this->redirect('/consumibles/');
			}
			$this->Session->setFlash('Ocurrio un problema al modificar el registro');
		}
		if($data=$this->Consumible->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro a este Consumible');
			$this->redirect('/consumibles/');
		}
			
	}
}
	
/***************************************************************************************************/