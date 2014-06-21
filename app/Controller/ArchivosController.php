<?php
App::uses('AppController', 'Controller');

class ArchivosController extends AppController {



/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();

	}

/************************************************************/
<<<<<<< HEAD
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
=======
						/*Por Julio*/
public function descargar($id = null)
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
public function index(){
>>>>>>> origin/master

	}
}
