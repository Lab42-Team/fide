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

            <?=$form->field($model, 'name') ?>
            <?= $form->field($model, 'description') ?>

            <div class="form-group">
                <?= Html::submitButton( Yii::t('app', 'BUTTON_UPDATE'),

                    ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>




