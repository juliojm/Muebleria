<?php
/**
 * ConsumibleFixture
 *
 */
class ConsumibleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'material_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modelo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cantidad' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
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
			'material_id' => 1,
			'modelo_id' => 1,
			'cantidad' => 1
		),
	);

}
