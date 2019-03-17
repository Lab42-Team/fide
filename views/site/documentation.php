<?php

/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = Yii::t('app', 'NAV_DOC');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-documentation">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr class = "my-4">
</div>

<div class="body-content">
    <p class = "lead"> В этом разделе будет представлена документация</p>
</div>