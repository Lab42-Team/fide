<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%table_membership_function}}".
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
class TableMembershipFunction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%table_membership_function}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'coefficient', 'fuzzy_cause_id'], 'required'],
            [['coefficient'], 'number'],
            [['fuzzy_cause_id'], 'default', 'value' => null],
            [['fuzzy_cause_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['fuzzy_cause_id'], 'exist', 'skipOnError' => true, 'targetClass' => FuzzyCause::className(),
                'targetAttribute' => ['fuzzy_cause_id' => 'id']],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'TABLE_MEMBERSHIP_FUNCTION_ID'),
            'value' => Yii::t('app', 'TABLE_MEMBERSHIP_FUNCTION_VALUE'),
            'coefficient' => Yii::t('app', 'TABLE_MEMBERSHIP_FUNCTION_COEFFICIENT'),
            'created_at' => Yii::t('app', 'TABLE_MEMBERSHIP_FUNCTION_CREATED_AT'),
            'updated_at' => Yii::t('app', 'TABLE_MEMBERSHIP_FUNCTION_UPDATED_AT'),
            'fuzzy_cause_id' => Yii::t('app', 'TABLE_MEMBERSHIP_FUNCTION_FUZZY_CAUSE_ID'),
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
