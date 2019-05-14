<?php

use app\models\Menu;
use klisl\nestable\Nestable;
use yii\helpers\Html;
use kartik\tree\TreeView;
use app\models\FishboneDiagram;


/* @var $query app\models\Menu */

$this->title = Yii::t('app', 'HEADER_CREATE') .": ". $model->name;
?>
<div class="editor-main">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr class = "my-4">
</div>
<div class="body-content">
    <div class ="container">
        <div class="col-md-2">
            <?php
            print_r(Menu::find()->roots()->all()) ;
    ?>

        </div>
        <div class="col-md-10">


        </div>
    </div>
</div>