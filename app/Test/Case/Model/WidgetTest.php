<?php
/* Widget Test cases generated on: 2011-12-14 17:49:32 : 1323892172*/
App::uses('Widget', 'Model');

/**
 * Widget Test Case
 *
 */
class WidgetTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.widget');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Widget = ClassRegistry::init('Widget');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Widget);

		parent::tearDown();
	}

}
