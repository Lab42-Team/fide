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
            [['name', 'description', 'certainty_factor', 'created_at', 'updated_at', 'fishbone_diagram_id'], 'required'],
            [['certainty_factor'], 'number'],
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
            'certainty_factor' => 'Certainty Factor',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'fishbone_diagram_id' => 'Fishbone Diagram ID',
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
