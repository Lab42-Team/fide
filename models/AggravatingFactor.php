<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%aggravating_factor}}".
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
class AggravatingFactor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%aggravating_factor}}';
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
            'id' => Yii::t('app', 'AGGRAVATING_FACTOR_ID'),
            'name' => Yii::t('app', 'AGGRAVATING_FACTOR_NAME'),
            'description' => Yii::t('app', 'AGGRAVATING_DESCRIPTION'),
            'value' => Yii::t('app', 'AGGRAVATING_FACTOR_VALUE'),
            'created_at' => Yii::t('app', 'AGGRAVATING_FACTOR_CREATED_AT'),
            'updated_at' => Yii::t('app', 'AGGRAVATING_FACTOR_UPDATED_AT'),
            'clear_cause_id' => Yii::t('app', 'AGGRAVATING_FACTOR_CLEAR_CAUSE_ID'),
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
