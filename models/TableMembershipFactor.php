<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%table_membership_factor}}".
 *
 * @property int $id
 * @property string $value
 * @property double $coefficient
 * @property int $created_at
 * @property int $updated_at
 * @property int $fuzzy_cause_id
 *
 * @property FuzzyCause $fuzzyCause
 */
class TableMembershipFactor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%table_membership_factor}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'coefficient', 'created_at', 'updated_at', 'fuzzy_cause_id'], 'required'],
            [['coefficient'], 'number'],
            [['created_at', 'updated_at', 'fuzzy_cause_id'], 'default', 'value' => null],
            [['created_at', 'updated_at', 'fuzzy_cause_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['fuzzy_cause_id'], 'exist', 'skipOnError' => true, 'targetClass' => FuzzyCause::className(), 'targetAttribute' => ['fuzzy_cause_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'coefficient' => 'Coefficient',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'fuzzy_cause_id' => 'Fuzzy Cause ID',
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
