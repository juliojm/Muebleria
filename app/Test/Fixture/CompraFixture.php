<?php
/**
 * CompraFixture
 *
 */
class CompraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'piezas' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'monto_compra' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'material_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'piezas' => 1,
			'monto_compra' => 1,
			'material_id' => 1
		),
	);

}
