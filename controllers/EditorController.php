<?php

namespace app\controllers;

use app\models\FishboneDiagram;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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

        return $this->render('main', [
            'model' =>  $this->findModel($id)]);
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
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}