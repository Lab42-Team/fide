<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%problem}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property double $certainty_factor
 * @property int $created_at
 * @property int $updated_at
 * @property int $fishbone_diagram_id
 *
 * @property FishboneDiagram $fishboneDiagram
 */
class Problem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%problem}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'certainty_factor', 'fishbone_diagram_id'], 'required'],
            [['certainty_factor'], 'number'],
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
            'id' =>  Yii::t('app', 'PROBLEM_ID'),
            'name' =>  Yii::t('app', 'PROBLEM_NAME'),
            'description' =>  Yii::t('app', 'PROBLEM_DESCRIPTION'),
            'certainty_factor' =>  Yii::t('app', 'PROBLEM_CERTAINTY_FACTOR'),
            'created_at' =>  Yii::t('app', 'PROBLEM_CREATED_AT'),
            'updated_at' =>  Yii::t('app', 'PROBLEM_UPDATED_AT'),
            'fishbone_diagram_id' =>  Yii::t('app', 'PROBLEM_FISHBONE_DIAGRAM_ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFishboneDiagram()
    {
        return $this->hasOne(FishboneDiagram::className(), ['id' => 'fishbone_diagram_id']);
    }
}
