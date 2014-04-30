<?php
App::uses('Consumible', 'Model');

/**
 * Consumible Test Case
 *
 */
class ConsumibleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consumible',
		'app.material',
		'app.modelo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consumible = ClassRegistry::init('Consumible');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consumible);

		parent::tearDown();
	}

}
