<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Page]].
 *
 * @see Page
 */
class PageQuery extends \yii\db\ActiveQuery
{
    public function noIndex()
    {
        return $this->andWhere('[[id]] NOT LIKE "index%"');
    }

    /**
     * @inheritdoc
     * @return Page[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Page|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
