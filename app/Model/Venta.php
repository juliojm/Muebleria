<?php
App::uses('AppModel', 'Model');
/**
 * Venta Model
 *
 * @property Modelo $Modelo
 */
class Venta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Modelo' => array(
			'className' => 'Modelo',
			'foreignKey' => 'modelo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
