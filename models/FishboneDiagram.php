<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%fishbone_diagram}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 *
 * @property MainCategory[] $mainCategories
 * @property Problem[] $problems
 */
class FishboneDiagram extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%fishbone_diagram}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'default', 'value' => null],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'FISHBONE_DIAGRAM_MODEL_ID'),
            'name' => Yii::t('app', 'FISHBONE_DIAGRAM_MODEL_NAME'),
            'description' => Yii::t('app', 'FISHBONE_DIAGRAM_MODEL_DESCRIPTION'),
            'created_at' => Yii::t('app', 'FISHBONE_DIAGRAM_MODEL_CREATED_AT'),
            'updated_at' => Yii::t('app', 'FISHBONE_DIAGRAM_MODEL_UPDATED_AT'),
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMainCategories()
    {
        return $this->hasMany(MainCategory::className(), ['fishbone_diagram_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProblems()
    {
        return $this->hasMany(Problem::className(), ['fishbone_diagram_id' => 'id']);
    }
}
