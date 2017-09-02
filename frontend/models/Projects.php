<?php

namespace frontend\models;

use Yii;
/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $category
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['title'], 'string', 'max' => 50],
            [['category'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'text' => 'Текст',
            'category' => 'Категория',
        ];
    }

}
