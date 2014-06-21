<?php
App::uses('AppController', 'Controller');

class ArchivosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();

	}

/************************************************************/



	
						/*Por Julio*/
/*public function descargar($id = null)
    {
        if (!$id)
        {
            $this->Session->setFlash('No has seleccionado ningun PDF');
            $this->redirect('/archivos/index');
        }else{
        // Sobrescribimos para que no aparezcan los resultados de debuggin
        // ya que sino daria un error al generar el pdf.
        Configure::write('debug',0);
        $resultado = $this->Archivo->findById($id); 
        $this->set("datos_pdf",$resultado);
        $this->layout = 'pdf'; //esto usara el layout pdf.ctp
        $this->render();
    }}
/************************************************************/
/*public function index(){
>>>>>>> origin/master

	}
	*/
	

	
/*	public function borrar($id=-999){	

	if($id==-999){
		$this->Session->setFlash('Especifica el Archivo que deseas borrar');
		$this->redirect('/eventos/mostrar');
	}else{
		$data = $this->Archivo->findById($id);
		$id_producto = $data['Archivo']['id'];
		if($this->Archivo->delete($id)){
			$this->Session->setFlash('Tu Archivo se eliminó correctamente');
			$this->redirect('/eventos/mostrar');
		}
	}
	$this->Session->setFlash('Ocurrió un problema al eliminar este Archivo');
	$this->redirect('/eventos/mostrar');
}
*/
/************************************************************/



/*
	public function ver($id = -999){
		if ($id == -999){
			$this->Session->setFlash('No has seleccionado ningún Evento');
			$this->redirect('/users/mifamilia');
		}
		$data = $this->Archivo->findById($id);
		$this->set('data',$data); 
}
}
*/	
public function borrar($id=-999){	

	if($id==-999){
		$this->Session->setFlash('Especifica el Archivo que deseas borrar');
		$this->redirect('/modelos/');
	}else{
		$data = $this->Archivo->findById($id);
		$id_producto = $data['Archivo']['id'];
		if($this->Archivo->delete($id)){
			$this->Session->setFlash('Tu Archivo se eliminó correctamente');
			$this->redirect('/modelos/');
		}
	}
	$this->Session->setFlash('Ocurrió un problema al eliminar este Archivo');
	$this->redirect('/modelos/');
}

/************************************************************/

public function agregar($id=-999){
	$this->set('id',$id);
	if ($this->request->is('post')) {
		if ($this->request->data['Archivo']['archivo']['type']=='image/jpeg'){
			$nombre=rand(111111111,999999999).'.jpg';
			copy($this->request->data['Archivo']['archivo']['tmp_name'],WWW_ROOT."/img/archivos/$nombre");
			$this->Archivo->create();
			$data=$this->request->data;
			$data['Archivo']['nombre_archivo']=$nombre;
		
			if ($this->Archivo->save($data)) {
				$this->Session->setFlash('Tu Archivo se guardo correctamente');
				$this->redirect("/modelos/");
			}
		}
		$this->Session->setFlash('Ocurrió un problema al guardar este archivo');
		$this->redirect("/modelos/");
		
		}
	}


	public function ver($id = -999){
		if ($id == -999){
			$this->Session->setFlash('No has seleccionado ningún Archivo');
			$this->redirect('/users/');
		}
		$data = $this->Archivo->findById($id);
		$this->set('data',$data); 
}
}

