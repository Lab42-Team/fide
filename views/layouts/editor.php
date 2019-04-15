<?php


/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\widgets\WLang;
use yii\bootstrap\ButtonDropdown;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo "<form class='navbar-form navbar-right'>" . WLang::widget() . "</form>";
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => Yii::t('app', 'NAV_BACK'),'url' => ['/fishbone-diagram/index']],
            ['label' => Yii::t('app', 'NAV_HOME'), 'url' => ['/site/index']],
            ['label' => Yii::t('app', 'NAV_EXPORT'),'url' => ['/editor/export']],
            ['label' => Yii::t('app', 'NAV_ADD'),'items' =>
            [
                [
                    'label' => Yii::t('app', 'NAV_ADD_PROBLEM'),
                    'content' => ''],
                [
                    'label' => Yii::t('app', 'NAV_ADD_CATEGORY'),
                    'content' => ''
                ],
             ]
         ],

            Yii::$app->user->isGuest ? (
            ['label' => Yii::t('app', 'NAV_LOGIN'), 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(Yii::t('app', 'NAV_LOGOUT'),
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);


    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"><?= Yii::t('app', 'FOOTER_COPYRIGHT') . ' &copy; ' . date('Y') . ' ' .
            Yii::t('app', 'FOOTER_INSTITUTE') ?></p>
        <p class="pull-right"><?= Yii::t('app', 'FOOTER_POWERED_BY') . ' <a href="mailto:' .
            Yii::$app->params['adminEmail'] . '">' . Yii::$app->params['adminEmail'] . '</a>' ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>

</html>

<?php $this->endPage() ?>
