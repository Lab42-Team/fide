<?php

namespace app\controllers;

use Yii;
use app\models\FishboneDiagram;
use app\models\FishboneDiagramSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/*FishboneDiagramController implements the CRUD actions for FishboneDiagram model.*/
class FishboneDiagramController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /*Lists all FishboneDiagram models.*/
    public function actionIndex()
    {
        $searchModel = new FishboneDiagramSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /*Displays a single FishboneDiagram model.*/
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    /*Creates a new FishboneDiagram model.*/
    public function actionCreate()
    {
        $model = new FishboneDiagram();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/editor/main', 'model' => $model]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /*Updates an existing FishboneDiagram model.*/
    public function actionUpdate($id)
    {
        //$model = $this->findModel($id);

        /*if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }*/

        return $this->redirect('/editor/main' /*['model' => $model,]*/);
    }

    /*Deletes an existing FishboneDiagram model*/
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /*Finds the FishboneDiagram model based on its primary key value.*/
    protected function findModel($id)
    {
        if (($model = FishboneDiagram::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
