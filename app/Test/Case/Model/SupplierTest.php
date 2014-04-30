<?php
App::uses('Supplier', 'Model');

/**
 * Supplier Test Case
 *
 */
class SupplierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supplier',
		'app.material',
		'app.materials_supplier',
		'app.compra',
		'app.consumible',
		'app.modelo',
		'app.tipo',
		'app.archivo',
		'app.venta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Supplier = ClassRegistry::init('Supplier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Supplier);

		parent::tearDown();
	}

}
