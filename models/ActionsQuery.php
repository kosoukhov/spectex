<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Actions]].
 *
 * @see Actions
 */
class ActionsQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere('[[deleted]]!=1');
    }

    /**
     * @inheritdoc
     * @return Actions[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Actions|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
