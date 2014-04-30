<?php
App::uses('Modelo', 'Model');

/**
 * Modelo Test Case
 *
 */
class ModeloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modelo',
		'app.tipo',
		'app.archivo',
		'app.consumible',
		'app.material',
		'app.supplier',
		'app.materials_supplier',
		'app.compra',
		'app.venta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Modelo = ClassRegistry::init('Modelo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Modelo);

		parent::tearDown();
	}

}
