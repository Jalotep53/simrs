<?php

namespace frontend\controllers;

use frontend\models\DataTriaseIgddetailSkala4;
use frontend\models\DataTriaseIgddetailSkala4Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataTriaseIgddetailSkala4Controller implements the CRUD actions for DataTriaseIgddetailSkala4 model.
 */
class DataTriaseIgddetailSkala4Controller extends Controller
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
     * Lists all DataTriaseIgddetailSkala4 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataTriaseIgddetailSkala4Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataTriaseIgddetailSkala4 model.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala4 Kode Skala4
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kode_skala4)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kode_skala4),
        ]);
    }

    /**
     * Creates a new DataTriaseIgddetailSkala4 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataTriaseIgddetailSkala4();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_skala4' => $model->kode_skala4]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataTriaseIgddetailSkala4 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala4 Kode Skala4
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kode_skala4)
    {
        $model = $this->findModel($no_rawat, $kode_skala4);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_skala4' => $model->kode_skala4]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataTriaseIgddetailSkala4 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala4 Kode Skala4
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kode_skala4)
    {
        $this->findModel($no_rawat, $kode_skala4)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataTriaseIgddetailSkala4 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala4 Kode Skala4
     * @return DataTriaseIgddetailSkala4 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kode_skala4)
    {
        if (($model = DataTriaseIgddetailSkala4::findOne(['no_rawat' => $no_rawat, 'kode_skala4' => $kode_skala4])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
