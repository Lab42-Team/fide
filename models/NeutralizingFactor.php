<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%neutralizing_factor}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $value
 * @property int $created_at
 * @property int $updated_at
 * @property int $clear_cause_id
 *
 * @property ClearCause $clearCause
 */
class NeutralizingFactor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%neutralizing_factor}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'value', 'created_at', 'updated_at', 'clear_cause_id'], 'required'],
            [['created_at', 'updated_at', 'clear_cause_id'], 'default', 'value' => null],
            [['created_at', 'updated_at', 'clear_cause_id'], 'integer'],
            [['name', 'description', 'value'], 'string', 'max' => 255],
            [['clear_cause_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClearCause::className(), 'targetAttribute' => ['clear_cause_id' => 'id']],
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
            'value' => 'Value',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'clear_cause_id' => 'Clear Cause ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClearCause()
    {
        return $this->hasOne(ClearCause::className(), ['id' => 'clear_cause_id']);
    }
}
