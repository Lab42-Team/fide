<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr class = "my-4">

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p><?= Yii::t('app', 'ERROR_PAGE_TEXT_ONE') ?></p>
    <p><?= Yii::t('app', 'ERROR_PAGE_TEXT_TWO') ?></p>

</div>