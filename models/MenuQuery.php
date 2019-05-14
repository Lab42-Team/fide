<?php
/**
 * Created by PhpStorm.
 * User: Юля
 * Date: 14.05.2019
 * Time: 9:34
 */

namespace app\models;
use creocoder\nestedsets\NestedSetsQueryBehavior;

class MenuQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
    return [
        NestedSetsQueryBehavior::className(),
    ];
    }
}
