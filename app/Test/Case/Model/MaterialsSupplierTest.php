<?php
App::uses('MaterialsSupplier', 'Model');

/**
 * MaterialsSupplier Test Case
 *
 */
class MaterialsSupplierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materials_supplier',
		'app.material',
		'app.supplier',
		'app.compra',
		'app.consumible',
		'app.modelo',
		'app.suppliers'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MaterialsSupplier = ClassRegistry::init('MaterialsSupplier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaterialsSupplier);

		parent::tearDown();
	}

}
