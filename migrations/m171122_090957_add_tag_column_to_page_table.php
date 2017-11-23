<?php

use yii\db\Migration;

/**
 * Handles adding tag to table `page`.
 */
class m171122_090957_add_tag_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('page', 'tag', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('page', 'tag');
    }
}
