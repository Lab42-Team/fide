<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%analytical_membership_factor}}".
 *
 * @property int $id
 * @property string $type
 * @property double $value
 * @property int $created_at
 * @property int $updated_at
 * @property int $fuzzy_cause_id
 *
 * @property FuzzyCause $fuzzyCause
 */
class AnalyticalMembershipFactor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%analytical_membership_factor}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'value', 'fuzzy_cause_id'], 'required'],
            [['value'], 'number'],
            [['fuzzy_cause_id'], 'default', 'value' => null],
            [['fuzzy_cause_id'], 'integer'],
            [['type'], 'string', 'max' => 255],
            [['fuzzy_cause_id'], 'exist', 'skipOnError' => true, 'targetClass' => FuzzyCause::className(), 'targetAttribute' => ['fuzzy_cause_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ANALYTICAL_MEMBERSHIP_FACTOR_ID'),
            'type' => Yii::t('app', 'ANALYTICAL_MEMBERSHIP_FACTOR_TYPE'),
            'value' => Yii::t('app', 'ANALYTICAL_MEMBERSHIP_FACTOR_VALUE'),
            'created_at' => Yii::t('app', 'ANALYTICAL_MEMBERSHIP_FACTOR_CREATED_AT'),
            'updated_at' => Yii::t('app', 'ANALYTICAL_MEMBERSHIP_FACTOR_UPDATED_AT'),
            'fuzzy_cause_id' => Yii::t('app', 'ANALYTICAL_MEMBERSHIP_FACTOR_FUZZY_CAUSE_ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuzzyCause()
    {
        return $this->hasOne(FuzzyCause::className(), ['id' => 'fuzzy_cause_id']);
    }
}
