<?php
App::uses('AppController', 'Controller');

class ComprasController extends AppController {
							
								/* CONTROLODADOR ELABORADO POR  --JULIO--*/

/*****************************************************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();
		
	}

/*****************************************************************************************************/
	public function index(){
		$data = $this->Compra->find("all");	
		$this->set('data' , $data);
		
	}
	
/*****************************************************************************************************/
	
	public function registrar(){
		
		$lstMateriales=$this->Compra->Material->find('list');
		$this->set('lstMateriales',$lstMateriales);
		
		if ($this->request->is('post')) {
			$this->Compra->create();
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash('Esta compra se ha guardado con éxito');
				$this->redirect('/compras/index');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de registrar esta compra.');
		}
	
	}
	
/*****************************************************************************************************/	
	public function ver($id){	

	if($data=$this->Compra->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de esta Compra');
			$this->redirect('/compras/');
		}
		
}	

/*****************************************************************************************************/
	public function borrar($id){
	
		if($this->Compra->delete($id)){
			$this->Session->setFlash('Esta Compra se elimino correctamente');
			$this->redirect('/compras/index');
		}
		$this->Session->setFlash('Ocurrio un problema al borrar la compra o tal vez el ID no existe');
		$this->redirect('/compras/index');
		
		

}
/*****************************************************************************************************/
	public function editar($id=-9999999){
	
		$lstMateriales=$this->Compra->Material->find('list');
		$this->set('lstMateriales',$lstMateriales);
		
	
		if ($id==-9999999){
			$this->Session->setFlash('Necesitas especificar una Compra para editarla');
			$this->redirect('/compras/index');
		}
		if ($this->request->is('post')) {
			$this->Compra->id=$id;
			$this->log(print_r($this->request->data,true));
			if($this->Compra->save($this->request->data)){
				$this->Session->setFlash('El regsitro se ha modificado exitosamente');
				$this->redirect('/compras/');
			}
			$this->Session->setFlash('Ocurrio un problema al modificar el registro');
		}
		if($data=$this->Compra->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro a esta Compra');
			$this->redirect('/compras/');
		}
			
	}

}
/*****************************************************************************************************/
