<?php
App::uses('Venta', 'Model');

/**
 * Venta Test Case
 *
 */
class VentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.venta',
		'app.modelo',
		'app.tipo',
		'app.archivo',
		'app.consumible',
		'app.material',
		'app.supplier',
		'app.materials_supplier',
		'app.compra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Venta = ClassRegistry::init('Venta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Venta);

		parent::tearDown();
	}

}
