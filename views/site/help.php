<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'HELP_PAGE_TITLE');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-help">

    <h1><?= Html::encode($this->title) ?></h1>

    <hr class = "my-4">
    <div class="body-content">
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success"><?= Yii::t('app', 'HELP_PAGE_MESSAGE') ?></div>
        <?php else: ?>
            <p><?= Yii::t('app', 'HELP_PAGE_TEXT') ?></p>
            <div class="row">
                <div class="col-lg-5">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div>
                            <div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'BUTTON_SUBMIT'),
                            ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        <?php endif; ?>
    </div>
</div