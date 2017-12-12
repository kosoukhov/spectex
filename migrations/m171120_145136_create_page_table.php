<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page`.
 */
class m171120_145136_create_page_table extends Migration {

	/**
	 * @inheritdoc
	 */
	public function safeUp() {
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
		}
		
		$tableName = 'page';
		$columns = [
			'id' => $this->string(),
			'title' => $this->string(),
			'body' => $this->text(),
			'PRIMARY KEY([[id]])',
		];
		$this->createTable($tableName, $columns);
	}

	/**
	 * @inheritdoc
	 */
	public function safeDown() {
		$this->dropTable('page');
	}

}
