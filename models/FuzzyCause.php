<?php

namespace app\models;

use Yii;

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
 * @property AnalyticalMembershipFactor[] $analyticalMembershipFactors
 * @property BaseScale[] $baseScales
 * @property MainCategory $mainCategory
 * @property TableMembershipFactor[] $tableMembershipFactors
 */
class FuzzyCause extends \yii\db\ActiveRecord
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
            [['name', 'name_expert', 'type_of_membership_factor', 'value', 'created_at', 'updated_at', 'main_category_id'], 'required'],
            [['created_at', 'updated_at', 'main_category_id'], 'default', 'value' => null],
            [['created_at', 'updated_at', 'main_category_id'], 'integer'],
            [['name', 'name_expert', 'type_of_membership_factor', 'value'], 'string', 'max' => 255],
            [['main_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => MainCategory::className(), 'targetAttribute' => ['main_category_id' => 'id']],
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
            'name_expert' => 'Name Expert',
            'type_of_membership_factor' => 'Type Of Membership Factor',
            'value' => 'Value',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'main_category_id' => 'Main Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnalyticalMembershipFactors()
    {
        return $this->hasMany(AnalyticalMembershipFactor::className(), ['fuzzy_cause_id' => 'id']);
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
        return $this->hasMany(TableMembershipFactor::className(), ['fuzzy_cause_id' => 'id']);
    }
}
