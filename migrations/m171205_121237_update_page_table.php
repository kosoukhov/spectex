<?php

use yii\db\Migration;

/**
 * Class m171205_121237_update_page_table
 */
class m171205_121237_update_page_table extends Migration {

	/**
	 * @inheritdoc
	 */
	public function safeUp() {
		$this->update('page', ['position' => 8], ['id' => 'contacts']);
		$this->update('page', ['position' => 6], ['id' => 'conditioner']);
		$this->update('page', ['position' => 7], ['id' => 'heater']);
	}

	/**
	 * @inheritdoc
	 */
	public function safeDown() {
		$this->update('page', ['position' => 6], ['id' => 'contacts']);
		$this->update('page', ['position' => null], ['id' => 'conditioner']);
		$this->update('page', ['position' => null], ['id' => 'heater']);

		return false;
	}
}
