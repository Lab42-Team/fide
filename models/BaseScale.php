<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%base_scale}}".
 *
 * @property int $id
 * @property string $name
 * @property string $range
 * @property string $unit
 * @property double $value
 * @property int $created_at
 * @property int $updated_at
 * @property int $fuzzy_cause_id
 *
 * @property FuzzyCause $fuzzyCause
 */
class BaseScale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%base_scale}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'range', 'unit', 'value', 'fuzzy_cause_id'], 'required'],
            [['value'], 'number'],
            [['fuzzy_cause_id'], 'default', 'value' => null],
            [['fuzzy_cause_id'], 'integer'],
            [['name', 'range', 'unit'], 'string', 'max' => 255],
            [['fuzzy_cause_id'], 'exist', 'skipOnError' => true, 'targetClass' => FuzzyCause::className(), 'targetAttribute' => ['fuzzy_cause_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'BASE_SCALE_ID'),
            'name' => Yii::t('app', 'BASE_SCALE_NAME'),
            'range' => Yii::t('app', 'BASE_SCALE_RANGE'),
            'unit' => Yii::t('app', 'BASE_SCALE_UNIT'),
            'value' => Yii::t('app', 'BASE_SCALE_VALUE'),
            'created_at' => Yii::t('app', 'BASE_SCALE_CREATED_AT'),
            'updated_at' => Yii::t('app', 'BASE_SCALE_UPDATED_AT'),
            'fuzzy_cause_id' => Yii::t('app', 'BASE_SCALE_FUZZY_CAUSE_ID'),
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
    public function getFuzzyCause()
    {
        return $this->hasOne(FuzzyCause::className(), ['id' => 'fuzzy_cause_id']);
    }
}
