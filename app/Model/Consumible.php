<?php
App::uses('AppModel', 'Model');
/**
 * Consumible Model
 *
 * @property Material $Material
 * @property Modelo $Modelo
 */
class Consumible extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cantidad' => array(
			'range' => array(
				'rule' => array('range',array(0,1000000000)),
				'message' => 'Esta fuera de rango, los valores son de 0 a 1,000,000,000',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Aquí colocas solo valores numéricos',
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
		),
		'Modelo' => array(
			'className' => 'Modelo',
			'foreignKey' => 'modelo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
