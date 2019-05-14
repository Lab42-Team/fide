<?php

namespace app\controllers;

use app\models\Menu;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\FishboneDiagram;

/*
 * EditorController implements the fide editor actions.
 */
class EditorController extends Controller
{
    public $layout = 'editor';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['main', 'export', 'logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /*
     * Displays main editor page.
     */
    public function actionMain($id)
    {
        $query = Menu::find()->where(['depth' => '0']);

        return $this->render('main', [
            'model' =>  $this->findModel($id), 'query' => $query]);
    }

    /*
     * Displays export page.
     */
    public function actionExport()
    {
        return $this->render('export');
    }

    protected function findModel($id)
    {
        if (($model = FishboneDiagram::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'ERROR_MESSAGE_PAGE_NOT_FOUND'));
    }
}