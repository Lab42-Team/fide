<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'FIDE';
$greeting = Yii::t('app', 'GREETING_TEXT');
?>
<div class="site-index">
    <div class="jumbotron">
        <h1><?= Html::encode($greeting) ?></h1>
    </div>

    <div class="body-content"></div>
</div>