<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `actions`.
 */
class m171124_133344_create_actions_table extends Migration {

	/**
	 * @inheritdoc
	 */
	public function safeUp() {
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
		}

		$this->createTable('actions', [
			'id' => Schema::TYPE_PK,
			'date_from' => Schema::TYPE_DATE . ' NOT NULL',
			'date_to' => Schema::TYPE_DATE . ' NOT NULL',
			'title' => Schema::TYPE_STRING . ' NOT NULL',
			'content' => Schema::TYPE_TEXT,
			'deleted' => Schema::TYPE_INTEGER . ' DEFAULT 0'
		]);
	}

	/**
	 * @inheritdoc
	 */
	public function safeDown() {
		$this->dropTable('actions');
	}

}
