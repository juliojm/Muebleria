<?php
App::uses('AppModel', 'Model');
/**
 * MaterialsSupplier Model
 *
 * @property Material $Material
 * @property Suppliers $Suppliers
 */
class MaterialsSupplier extends AppModel {


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
		'Suppliers' => array(
			'className' => 'Suppliers',
			'foreignKey' => 'suppliers_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
