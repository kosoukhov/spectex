<?php

use yii\db\Migration;

/**
 * Handles adding position to table `page`.
 */
class m171130_160017_add_position_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('page', 'position', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('page', 'position');
    }
}
