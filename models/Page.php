<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Page".
 *
 * @property string $id
 * @property string $title
 * @property string $body
 * @property string $tag
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['body', 'tag'], 'string'],
            [['id', 'title', 'tag'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Адрес',
            'title' => 'Заголовок',
            'body' => 'Текст',
			'tag' => 'Теги',
        ];
    }

    /**
     * @inheritdoc
     * @return PageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PageQuery(get_called_class());
    }
}
