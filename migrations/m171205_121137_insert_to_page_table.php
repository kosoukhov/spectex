<?php

use yii\db\Migration;

/**
 * Class m171205_121137_insert_to_page_table
 */
class m171205_121137_insert_to_page_table extends Migration {

	/**
	 * @inheritdoc
	 */
	public function safeUp() {
		$this->insert('page', [
			'id' => 'conditioner',
			'title' => 'title conditioner',
			'body' => 'content conditioner',
			'tag' => 'tag conditioner',
		]);

		$this->insert('page', [
			'id' => 'heater',
			'title' => 'title heater',
			'body' => 'content heater',
			'tag' => 'tag heater',
		]);
	}

	/**
	 * @inheritdoc
	 */
	public function safeDown() {
		$this->delete('page', ['id' => 'conditioner']);
		$this->delete('page', ['id' => 'heater']);

		return false;
	}
}
