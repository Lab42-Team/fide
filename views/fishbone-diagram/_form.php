<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FishboneDiagram */
/* @var $modelProblem app\models\Problem */
/* @var $modelCategory app\models\MainCategory */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="fishbone-diagram-form">
    <div class="container">
        <hr class = "my-4">
        <div class="col-md-8">

    <?php $form = ActiveForm::begin()?>
    <?=$form->errorSummary($model)?>
    <?=$form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <hr class = "my-4">
    <?= $form->field($modelProblem, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelProblem, 'certainty_factor')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelProblem, 'description')->textarea(['maxlength' => true]) ?>

    <hr class = "my-4">
    <?= $form->field($modelCategory, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($modelCategory, 'description')->textarea(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'BUTTON_CREATE'),
            ['class' =>'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end();?>
        </div>
    </div>
</div>


