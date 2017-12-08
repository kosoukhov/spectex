<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actions".
 *
 * @property int $id
 * @property string $date_from
 * @property string $date_to
 * @property string $title
 * @property string $content
 * @property int $deleted
 */
class Actions extends \yii\db\ActiveRecord {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'actions';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['date_from', 'date_to', 'title'], 'required'],
			[['date_from', 'date_to'], 'safe'],
			[['content'], 'string'],
			[['deleted'], 'integer'],
			[['title'], 'string', 'max' => 255],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'date_from' => 'Дата начала',
			'date_to' => 'Дата окончания',
			'title' => 'Заголовок',
			'content' => 'Текст',
			'deleted' => 'Признак удаления',
		];
	}

	/**
	 * @inheritdoc
	 * @return ActionsQuery the active query used by this AR class.
	 */
	public static function find() {
		return new ActionsQuery(get_called_class());
	}
}
