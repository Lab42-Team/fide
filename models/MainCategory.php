<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%main_category}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 * @property int $fishbone_diagram_id
 *
 * @property ClearCause[] $clearCauses
 * @property FuzzyCause[] $fuzzyCauses
 * @property FishboneDiagram $fishboneDiagram
 */
class MainCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%main_category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'fishbone_diagram_id'], 'required'],
            [['fishbone_diagram_id'], 'default', 'value' => null],
            [['fishbone_diagram_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            [['fishbone_diagram_id'], 'exist', 'skipOnError' => true, 'targetClass' => FishboneDiagram::className(), 'targetAttribute' => ['fishbone_diagram_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'MAIN_CATEGORY_ID'),
            'name' => Yii::t('app', 'MAIN_CATEGORY_NAME'),
            'description' => Yii::t('app', 'MAIN_CATEGORY_DESCRIPTION'),
            'created_at' =>  Yii::t('app', 'MAIN_CATEGORY_CREATED_AT'),
            'updated_at' => Yii::t('app', 'MAIN_CATEGORY_UPDATED_AT'),
            'fishbone_diagram_id' => Yii::t('app', 'MAIN_CATEGORY_FISHBONE_DIAGRAM_ID'),
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClearCauses()
    {
        return $this->hasMany(ClearCause::className(), ['main_category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuzzyCauses()
    {
        return $this->hasMany(FuzzyCause::className(), ['main_category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFishboneDiagram()
    {
        return $this->hasOne(FishboneDiagram::className(), ['id' => 'fishbone_diagram_id']);
    }
}
