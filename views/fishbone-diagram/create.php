<?php


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FishboneDiagram */

$this->title =  Yii::t('app', 'HEADER_CREATE');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'NAV_DIAGRAMS'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fishbone-diagram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
