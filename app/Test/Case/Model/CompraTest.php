<?php
App::uses('Compra', 'Model');

/**
 * Compra Test Case
 *
 */
class CompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.compra',
		'app.material'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Compra = ClassRegistry::init('Compra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Compra);

		parent::tearDown();
	}

}
