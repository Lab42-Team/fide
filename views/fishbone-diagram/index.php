<?php

use app\models\FishboneDiagramSearch;

use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FishboneDiagramSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'NAV_DIAGRAMS');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="fishbone-diagram-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr class = "my-4">
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'HEADER_CREATE'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'description',
            [
                'attribute' => 'created_at',
                'value' => function($model, $key, $index, $grid) {
                    return date('Y-m-d H:i', $model->created_at);
                },

            ],
            [
                'attribute' => 'updated_at',
                'value' => function($model, $key, $index, $grid) {
                    return date('Y-m-d H:i', $model->updated_at);
                },

            ],

            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view} {update} {delete}',
                'buttons' =>
                    ['update' => function($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
                            Url::to(['/editor/main', 'id' => $model->id],['class'=>'primary']));},]
            ],
        ]
    ]); ?>
</div>
