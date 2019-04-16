<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FishboneDiagram */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'NAV_DIAGRAMS'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fishbone-diagram-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'BUTTON_UPDATE'), ['update', 'id' => $model->id],
            ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'BUTTON_EDIT'), ['/editor/main', 'id' => $model->id],
            ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'BUTTON_DELETE'), ['delete', 'id' => $model->id],
            ['class' => 'btn btn-danger', 'data' => ['confirm' => Yii::t('app', 'CONFIRM_TEXT'),
                'method' => 'post']]) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name',
            'description',
            'created_at:dateTime',
            'updated_at:dateTime',
        ],
    ]) ?>

</div>
