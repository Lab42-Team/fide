<?php


namespace app\controllers;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use app\models\FishboneDiagram;

class EditorController extends Controller
{
    public $layout = 'editor';

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

    /*Displays main editor page.*/
    public function actionMain()
    {
        return $this->render('main');
    }
    /*Displays export page.*/
    public function actionExport()
    {
        return $this->render('export');
    }

}