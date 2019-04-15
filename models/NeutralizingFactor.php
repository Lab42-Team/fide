<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

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
            [['name', 'value', 'clear_cause_id'], 'required'],
            [['clear_cause_id'], 'default', 'value' => null],
            [['clear_cause_id'], 'integer'],
            [['name', 'value'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            [['clear_cause_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClearCause::className(), 'targetAttribute' => ['clear_cause_id' => 'id']],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'NEUTRALIZING_FACTOR_ID'),
            'name' => Yii::t('app', 'NEUTRALIZING_FACTOR_NAME'),
            'description' => Yii::t('app', 'NEUTRALIZING_DESCRIPTION'),
            'value' => Yii::t('app', 'NEUTRALIZING_FACTOR_VALUE'),
            'created_at' => Yii::t('app', 'NEUTRALIZING_FACTOR_CREATED_AT'),
            'updated_at' => Yii::t('app', 'NEUTRALIZING_FACTOR_UPDATED_AT'),
            'clear_cause_id' => Yii::t('app', 'NEUTRALIZING_FACTOR_CLEAR_CAUSE_ID'),
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
