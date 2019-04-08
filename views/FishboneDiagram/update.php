<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FishboneDiagram */

$this->title = 'Update Fishbone Diagram: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fishbone Diagrams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fishbone-diagram-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
