<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\FishboneDiagram;

/* @var $this yii\web\View */
/* @var $model app\models\FishboneDiagram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fishbone-diagram-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput()?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'BUTTON_SAVE'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
