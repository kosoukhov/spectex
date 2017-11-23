<?php

use yii\db\Migration;

/**
 * Class m171122_095737_insert_to_page_table
 */
class m171122_095737_insert_to_page_table extends Migration {

	/**
	 * @inheritdoc
	 */
	public function safeUp() {
		$this->insert('page', [
			'id' => 'index',
			'title' => 'title index',
			'body' => 'content index',
			'tag' => 'tag index',
		]);

		$this->insert('page', [
			'id' => 'techobslug',
			'title' => 'title techobslug',
			'body' => 'content techobslug',
			'tag' => 'tag techobslug',
		]);

		$this->insert('page', [
			'id' => 'zamena',
			'title' => 'title zamena',
			'body' => 'content zamena',
			'tag' => 'tag zamena',
		]);

		$this->insert('page', [
			'id' => 'diag',
			'title' => 'title diag',
			'body' => 'content diag',
			'tag' => 'tag diag',
		]);

		$this->insert('page', [
			'id' => 'tire',
			'title' => 'title tire',
			'body' => 'content tire',
			'tag' => 'tag tire',
		]);

		$this->insert('page', [
			'id' => 'camber',
			'title' => 'title camber',
			'body' => 'content camber',
			'tag' => 'tag camber',
		]);
		
		$this->insert('page', [
			'id' => 'contacts',
			'title' => 'title contacts',
			'body' => 'content contacts',
			'tag' => 'tag contacts',
		]);
	}

	/**
	 * @inheritdoc
	 */
	public function safeDown() {
		$this->delete('page', ['id' => 'index']);
		$this->delete('page', ['id' => 'techobslug']);
		$this->delete('page', ['id' => 'zamena']);
		$this->delete('page', ['id' => 'diag']);
		$this->delete('page', ['id' => 'tire']);
		$this->delete('page', ['id' => 'camber']);
		$this->delete('page', ['id' => 'contacts']);

		return false;
	}

	/*
	  // Use up()/down() to run migration code without a transaction.
	  public function up()
	  {

	  }

	  public function down()
	  {
	  echo "m171122_095737_insert_to_page_table cannot be reverted.\n";

	  return false;
	  }
	 */
}
