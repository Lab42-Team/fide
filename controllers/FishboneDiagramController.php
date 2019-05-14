<?php

namespace app\controllers;

use app\models\MainCategory;
use Yii;
use app\models\FishboneDiagram;
use app\models\Problem;
use app\models\Menu;
use app\models\FishboneDiagramSearch;
use yii\base\Model;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;

/*
 * FishboneDiagramController implements the CRUD actions for FishboneDiagram model.
 */
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
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'edit', 'logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all FishboneDiagram models.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FishboneDiagramSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FishboneDiagram model.
     *
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Creates a new FishboneDiagram model.
     *
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FishboneDiagram();
        $modelProblem = new Problem();
        $modelCategory = new MainCategory();

        if ($model->load(Yii::$app->request->post()) && $modelProblem->load(Yii::$app->request->post())
            && $modelCategory->load(Yii::$app->request->post()))
        {


            $model->save();
            $root = new Menu(['name' => $model->name]);
            $root->makeRoot();

            $modelProblem->fishbone_diagram_id = $model->id;
            $modelProblem->save();
            $item = new Menu(['name' => $modelProblem->name]);
            $item->prependTo($root);

            $modelCategory->fishbone_diagram_id = $model->id;
            $modelCategory->save();
            $item2 = new Menu(['name' => $modelCategory]);
            $item2->appendTo($root);

            $query = Menu::find()->roots()->all();

            return $this->redirect(['/editor/main', 'id' => $model->id, 'query' => $query]);
        }
        return $this->render('create', [
            'model' => $model, 'modelProblem' => $modelProblem, 'modelCategory' => $modelCategory,
        ]);
    }


    /**
     * Updates an existing FishboneDiagram model.

     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //$modelProblem = Problem::findOne($model->id);


        if ($model->load(Yii::$app->request->post())){// && $modelProblem->load(Yii::$app->request->post())) {
            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /*
     * Deletes an existing FishboneDiagram model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        //$id_ = Problem::findOne($id)->fishbone_diagram_id;
        $this->findModel($id)->delete();
        //Problem::findOne($id_)->delete();

        return $this->redirect(['index']);
    }

    /*
     * Redirect to diagram editor.
     *
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionEdit($id)
    {
        $model = $this->findModel($id);

        return $this->redirect(['/editor/main', 'id' => $model->id]);
    }

    /*
     * Finds the FishboneDiagram model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     * @return FishboneDiagram the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FishboneDiagram::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException(Yii::t('app', 'ERROR_MESSAGE_PAGE_NOT_FOUND'));
    }


}