<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FishboneDiagram */

$this->title = 'Create Fishbone Diagram';
$this->params['breadcrumbs'][] = ['label' => 'Fishbone Diagrams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fishbone-diagram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
