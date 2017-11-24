<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $date
 * @property string $title
 * @property string $content
 * @property int $deleted
 */
class News extends \yii\db\ActiveRecord {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'news';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['date', 'title'], 'required'],
			[['date'], 'safe'],
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
			'date' => 'Дата',
			'title' => 'Заголовок',
			'content' => 'Текст',
			'deleted' => 'Признак удаления',
		];
	}

	/**
	 * @inheritdoc
	 * @return NewsQuery the active query used by this AR class.
	 */
	public static function find() {
		return new NewsQuery(get_called_class());
	}
}
