<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%fuzzy_cause}}".
 *
 * @property int $id
 * @property string $name
 * @property string $name_expert
 * @property string $type_of_membership_factor
 * @property string $value
 * @property int $created_at
 * @property int $updated_at
 * @property int $main_category_id
 *
 * @property AnalyticalMembershipFunction[] $analyticalMembershipFunction
 * @property BaseScale[] $baseScales
 * @property MainCategory $mainCategory
 * @property TableMembershipFunction[] $tableMembershipFunction
 */
class FuzzyCause extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%fuzzy_cause}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'expert_name', 'membership_function_type', 'value','main_category_id'], 'required'],
            [['main_category_id'], 'default', 'value' => null],
            [['main_category_id'], 'integer'],
            [['name', 'expert_name', 'membership_function_type', 'value'], 'string', 'max' => 255],
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
            'id' => Yii::t('app', 'FUZZY_CAUSE_ID'),
            'name' => Yii::t('app', 'FUZZY_CAUSE_NAME'),
            'description' => Yii::t('app', 'FUZZY_CAUSE_DESCRIPTION'),
            'expert_name' => Yii::t('app', 'FUZZY_CAUSE_EXPERT_NAME'),
            'membership_function_type' => Yii::t('app', 'FUZZY_CAUSE_MEMBERSHIP_FUNCTION_TYPE'),
            'value' => Yii::t('app', 'FUZZY_CAUSE_VALUE'),
            'created_at' => Yii::t('app', 'FUZZY_CAUSE_CREATED_AT'),
            'updated_at' => Yii::t('app', 'FUZZY_CAUSE_UPDATED_AT'),
            'main_category_id' => Yii::t('app', 'FUZZY_CAUSE_MAIN_CATEGORY_ID'),
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
    public function getAnalyticalMembershipFactors()
    {
        return $this->hasMany(AnalyticalMembershipFunction::className(), ['fuzzy_cause_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaseScales()
    {
        return $this->hasMany(BaseScale::className(), ['fuzzy_cause_id' => 'id']);
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
    public function getTableMembershipFactors()
    {
        return $this->hasMany(TableMembershipFunction::className(), ['fuzzy_cause_id' => 'id']);
    }
}
