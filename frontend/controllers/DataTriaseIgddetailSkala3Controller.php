<?php

namespace frontend\controllers;

use frontend\models\DataTriaseIgddetailSkala3;
use frontend\models\DataTriaseIgddetailSkala3Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataTriaseIgddetailSkala3Controller implements the CRUD actions for DataTriaseIgddetailSkala3 model.
 */
class DataTriaseIgddetailSkala3Controller extends Controller
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
     * Lists all DataTriaseIgddetailSkala3 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataTriaseIgddetailSkala3Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataTriaseIgddetailSkala3 model.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala3 Kode Skala3
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kode_skala3)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kode_skala3),
        ]);
    }

    /**
     * Creates a new DataTriaseIgddetailSkala3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataTriaseIgddetailSkala3();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_skala3' => $model->kode_skala3]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataTriaseIgddetailSkala3 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala3 Kode Skala3
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kode_skala3)
    {
        $model = $this->findModel($no_rawat, $kode_skala3);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_skala3' => $model->kode_skala3]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataTriaseIgddetailSkala3 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala3 Kode Skala3
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kode_skala3)
    {
        $this->findModel($no_rawat, $kode_skala3)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataTriaseIgddetailSkala3 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala3 Kode Skala3
     * @return DataTriaseIgddetailSkala3 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kode_skala3)
    {
        if (($model = DataTriaseIgddetailSkala3::findOne(['no_rawat' => $no_rawat, 'kode_skala3' => $kode_skala3])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
