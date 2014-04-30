<?php
/**
 * ModeloFixture
 *
 */
class ModeloFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cantidad_en_bodega' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'cantidad_en_fabrica' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'precio' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'costo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'tipo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'cantidad_en_bodega' => 1,
			'cantidad_en_fabrica' => 1,
			'precio' => 1,
			'costo' => 1,
			'tipo_id' => 1,
			'created' => '2014-04-30 12:53:47',
			'modified' => '2014-04-30 12:53:47'
		),
	);

}
