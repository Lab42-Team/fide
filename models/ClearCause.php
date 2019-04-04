<?php

namespace app\models;

use Yii;

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
            [['name', 'description', 'certainty_factor', 'created_at', 'updated_at', 'main_category_id'], 'required'],
            [['certainty_factor'], 'number'],
            [['created_at', 'updated_at', 'main_category_id'], 'default', 'value' => null],
            [['created_at', 'updated_at', 'main_category_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'certainty_factor' => 'Certainty Factor',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'main_category_id' => 'Main Category ID',
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
