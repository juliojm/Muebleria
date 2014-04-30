<?php
App::uses('Tipo', 'Model');

/**
 * Tipo Test Case
 *
 */
class TipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo',
		'app.modelo',
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
		$this->Tipo = ClassRegistry::init('Tipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipo);

		parent::tearDown();
	}

}
