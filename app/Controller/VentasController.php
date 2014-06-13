<?php
App::uses('AppController', 'Controller');

class VentasController extends AppController {
						/* CONTROLODADOR ELABORADO POR  --JULIO--*/

/*****************************************************************************************************/



	public function beforeFilter(){
		parent::beforeFilter();
		
	}

/*****************************************************************************************************/
public function index(){
		$data = $this->Venta->find("all");	
		$this->set('data' , $data);
		
	}
	
/*****************************************************************************************************/
	
	public function registrar(){
	
		$lstModelos=$this->Venta->Modelo->find('list');
		$this->set('lstModelos',$lstModelos);
				
		if ($this->request->is('post')) {
			$this->Venta->create();
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash('Esta venta se ha generado con éxito');
				$this->redirect('/ventas/index');
			}
			$this->Session->setFlash('Ocurrió un problema al momento de emitir esta venta.');
		}
	
	}
	
/*****************************************************************************************************/	
	public function ver($id){	

	if($data=$this->Venta->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro el ID de esta Venta');
			$this->redirect('/ventas/');
		}
		
}	

/*****************************************************************************************************/
	public function borrar($id){
	
		if($this->Venta->delete($id)){
			$this->Session->setFlash('Esta Venta se elimino correctamente');
			$this->redirect('/ventas/index');
		}
		$this->Session->setFlash('Ocurrio un problema al eliminar la venta o tal vez el ID no existe');
		$this->redirect('/ventas/index');
		
		

}
/*****************************************************************************************************/
	public function editar($id=-9999999){
	
			if ($id==-9999999){
			$this->Session->setFlash('Necesitas especificar una Venta para editarla');
			$this->redirect('/ventas/index');
		}
		if ($this->request->is('post')) {
			$this->Venta->id=$id;
			if($this->Venta->save($this->request->data)){
				$this->Session->setFlash('El regsitro se ha modificado exitosamente');
				$this->redirect('/ventas/');
			}
			$this->Session->setFlash('Ocurrio un problema al modificar el registro');
		}
		if($data=$this->Venta->findById($id)){
			$this->set('data',$data);
		}
		else{
			$this->Session->setFlash('No se encontro a esta Venta');
			$this->redirect('/compras/');
		}
			
	}

}
/*****************************************************************************************************/


