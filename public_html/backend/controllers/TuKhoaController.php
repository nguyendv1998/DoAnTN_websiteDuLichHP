<?php

namespace backend\controllers;

use common\models\API_H17;
use Yii;
use common\models\TuKhoa;
use common\models\search\TuKhoaSearch;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * TuKhoaController implements the CRUD actions for TuKhoa model.
 */
class TuKhoaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                // KO CÓ ROLER: tất cả mọi người
                // ?: những người là khách
                // @: những người đã đăng nhập
                'rules' => [
                    [
                        'actions' => [ 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions'=>['index','view','delete','update','delete','create','list','them-tu-khoa'],
                        'allow'=>true,
                        'matchCallback'=>function($rule,$action)
                        {
                            return API_H17::isAccess(['bientapvien']);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TuKhoa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TuKhoaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TuKhoa model.
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
     * Creates a new TuKhoa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TuKhoa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TuKhoa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TuKhoa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TuKhoa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TuKhoa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TuKhoa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionThemTuKhoa(){
        if(isset($_POST['tukhoas'])){
            if($_POST['hidden_input']==-1)
            {
                try{
                    $tukhoas= explode(",", $_POST['tukhoas']);
                    foreach ($tukhoas as $item){
                        $tentukhoa = trim(preg_replace('/\s+/', ' ', $item));
                        $tukhoa= new TuKhoa();
                        $tukhoa->TenTuKhoa=$tentukhoa;
                        $tukhoa->save();
                    }
                }
                catch (Exception $exception){};
            }
            else{
                $id=$_POST['hidden_input'];
                $tukhoa=TuKhoa::findOne(['id'=>$id]);
                $tukhoa->TenTuKhoa=$_POST['tukhoas'];
                $tukhoa->save();
            }
        }
        $searchModel = new TuKhoaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionList($query)
    {
        $models = TuKhoa::find()->andFilterWhere(['LIKE','TenTuKhoa',$query])->all();
        $items = [];
        /** @var TuKhoa $model */
        foreach ($models as $model) {
            $items[] = ['name' => $model->TenTuKhoa];
        }
        // We know we can use ContentNegotiator filter
        // this way is easier to show you here :)
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $items;
    }
}
