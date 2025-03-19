<?php

namespace frontend\controllers;

use frontend\models\ReferensiMobilejknBpjsTaskid;
use frontend\models\ReferensiMobilejknBpjsTaskidSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReferensiMobilejknBpjsTaskidController implements the CRUD actions for ReferensiMobilejknBpjsTaskid model.
 */
class ReferensiMobilejknBpjsTaskidController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ReferensiMobilejknBpjsTaskid models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReferensiMobilejknBpjsTaskidSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReferensiMobilejknBpjsTaskid model.
     * @param string $no_rawat No Rawat
     * @param string $taskid Taskid
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $taskid)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $taskid),
        ]);
    }

    /**
     * Creates a new ReferensiMobilejknBpjsTaskid model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ReferensiMobilejknBpjsTaskid();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'taskid' => $model->taskid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ReferensiMobilejknBpjsTaskid model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $taskid Taskid
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $taskid)
    {
        $model = $this->findModel($no_rawat, $taskid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'taskid' => $model->taskid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ReferensiMobilejknBpjsTaskid model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $taskid Taskid
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $taskid)
    {
        $this->findModel($no_rawat, $taskid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReferensiMobilejknBpjsTaskid model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $taskid Taskid
     * @return ReferensiMobilejknBpjsTaskid the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $taskid)
    {
        if (($model = ReferensiMobilejknBpjsTaskid::findOne(['no_rawat' => $no_rawat, 'taskid' => $taskid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
