<?php
App::uses('AppController', 'Controller');

class ArchivosController extends AppController {



/************************************************************/

	public function beforeFilter(){
		parent::beforeFilter();

	}

/************************************************************/
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

	}
}
