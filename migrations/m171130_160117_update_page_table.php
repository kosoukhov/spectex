<?php

use yii\db\Migration;

/**
 * Class m171130_160117_update_page_table
 */
class m171130_160117_update_page_table extends Migration {

	/**
	 * @inheritdoc
	 */
	public function safeUp() {
		$this->update('page', ['position' => 0], ['id' => 'index']);
		$this->update('page', ['position' => 1], ['id' => 'techobslug']);
		$this->update('page', ['position' => 2], ['id' => 'zamena']);
		$this->update('page', ['position' => 3], ['id' => 'diag']);
		$this->update('page', ['position' => 4], ['id' => 'tire']);
		$this->update('page', ['position' => 5], ['id' => 'camber']);
		$this->update('page', ['position' => 6], ['id' => 'contacts']);
	}

	/**
	 * @inheritdoc
	 */
	public function safeDown() {
		$this->update('page', ['position' => null], ['id' => 'index']);
		$this->update('page', ['position' => null], ['id' => 'techobslug']);
		$this->update('page', ['position' => null], ['id' => 'zamena']);
		$this->update('page', ['position' => null], ['id' => 'diag']);
		$this->update('page', ['position' => null], ['id' => 'tire']);
		$this->update('page', ['position' => null], ['id' => 'camber']);
		$this->update('page', ['position' => null], ['id' => 'contacts']);

		return false;
	}
}
