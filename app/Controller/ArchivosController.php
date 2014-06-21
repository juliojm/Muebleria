<?php
App::uses('AppController', 'Controller');

class ArchivosController extends AppController {

/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();

	}

/************************************************************/
public function agregar(){
if ($this->request->is('post')) {
		if ($this->request->data['Archivos']['nombre_archivo']['type']=='image/jpeg'){
			$nombre=rand(111111111,999999999).'.jpg';
			copy($this->request->data['Archivos']['nombre_archivo']['tmp_name'],WWW_ROOT."/img/fotos/$nombre");
			$this->Foto->create();
			//$data['Foto']['producto_id']=$producto_id;
			//$data['Foto']['archivo']=$nombre;
		
			if ($this->Foto->save($data)) {
				$this->Session->setFlash('Tu foto se guardo correctamente');
				$this->redirect("/");
			}
		}
		$this->Session->setFlash('Ocurrió un problema guardando tu foto');
		
		}
	}


}
