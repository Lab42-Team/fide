<?php

namespace app\models;

use Yii;

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
            [['name', 'description', 'created_at', 'updated_at', 'fishbone_diagram_id'], 'required'],
            [['created_at', 'updated_at', 'fishbone_diagram_id'], 'default', 'value' => null],
            [['created_at', 'updated_at', 'fishbone_diagram_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
            [['fishbone_diagram_id'], 'exist', 'skipOnError' => true, 'targetClass' => FishboneDiagram::className(), 'targetAttribute' => ['fishbone_diagram_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'fishbone_diagram_id' => 'Fishbone Diagram ID',
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
