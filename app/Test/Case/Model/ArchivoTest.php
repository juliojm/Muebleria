<?php
App::uses('Archivo', 'Model');

/**
 * Archivo Test Case
 *
 */
class ArchivoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.archivo',
		'app.modelo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Archivo = ClassRegistry::init('Archivo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Archivo);

		parent::tearDown();
	}

}
