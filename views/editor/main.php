<?php
use yii\helpers\Html;
use app\models\FishboneDiagram;

$this->title = Yii::t('app', 'HEADER_CREATE') .": ". $model->name;
?>
<div class="editor-main">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr class = "my-4">
</div>
<div class="body-content">
    <div class ="container">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
        </div>
    </div>
</div>