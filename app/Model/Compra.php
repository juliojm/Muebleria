<?php
App::uses('AppModel', 'Model');
/**
 * Compra Model
 *
 * @property Material $Material
 */
class Compra extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'piezas' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Indica una cantidad de piezas',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'range' => array(
				'rule' => array('range',array(0,10000)),
				'message' => 'Coloca un valor, el rango es de 0 a 10,000',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'monto_compra' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Indica una cantidad numerica para el monto',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'range' => array(
				'rule' => array('range',array(0,1000000000)),
				'message' => 'Coloca un rango de 0 a un 1,000,000,000.00',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Material' => array(
			'className' => 'Material',
			'foreignKey' => 'material_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
