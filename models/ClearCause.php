<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%clear_cause}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property double $certainty_factor
 * @property int $created_at
 * @property int $updated_at
 * @property int $main_category_id
 *
 * @property AggravatingFactor[] $aggravatingFactors
 * @property MainCategory $mainCategory
 * @property NeutralizingFactor[] $neutralizingFactors
 */
class ClearCause extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%clear_cause}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'certainty_factor', 'main_category_id'], 'required'],
            [['certainty_factor'], 'number'],
            [['main_category_id'], 'default', 'value' => null],
            [['main_category_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            [['main_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => MainCategory::className(), 'targetAttribute' => ['main_category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'CLEAR_CAUSE_ID'),
            'name' => Yii::t('app', 'CLEAR_CAUSE_NAME'),
            'description' => Yii::t('app', 'CLEAR_CAUSE_DESCRIPTION'),
            'certainty_factor' => Yii::t('app', 'CLEAR_CAUSE_CERTAINTY_FACTOR'),
            'created_at' => Yii::t('app', 'CLEAR_CAUSE_CREATED_AT'),
            'updated_at' => Yii::t('app', 'CLEAR_CAUSE_UPDATED_AT'),
            'main_category_id' => Yii::t('app', 'CLEAR_CAUSE_MAIN_CATEGORY_ID'),
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
    public function getAggravatingFactors()
    {
        return $this->hasMany(AggravatingFactor::className(), ['clear_cause_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMainCategory()
    {
        return $this->hasOne(MainCategory::className(), ['id' => 'main_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNeutralizingFactors()
    {
        return $this->hasMany(NeutralizingFactor::className(), ['clear_cause_id' => 'id']);
    }
}
