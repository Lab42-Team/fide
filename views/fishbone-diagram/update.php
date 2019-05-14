<?php


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FishboneDiagram */
/* @var $modelProblem app\models\Problem */

$this->title =  Yii::t('app', 'HEADER_UPDATE') . $model->name;
$this->params['breadcrumbs'][] = ['label' =>  Yii::t('app', 'NAV_DIAGRAMS'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'HEADER_UPDATE');
?>
<div class="fishbone-diagram-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
