<?php

namespace frontend\controllers;

use frontend\models\DataTriaseIgddetailSkala2;
use frontend\models\DataTriaseIgddetailSkala2Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataTriaseIgddetailSkala2Controller implements the CRUD actions for DataTriaseIgddetailSkala2 model.
 */
class DataTriaseIgddetailSkala2Controller extends Controller
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
     * Lists all DataTriaseIgddetailSkala2 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataTriaseIgddetailSkala2Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataTriaseIgddetailSkala2 model.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala2 Kode Skala2
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kode_skala2)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kode_skala2),
        ]);
    }

    /**
     * Creates a new DataTriaseIgddetailSkala2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataTriaseIgddetailSkala2();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_skala2' => $model->kode_skala2]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataTriaseIgddetailSkala2 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala2 Kode Skala2
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kode_skala2)
    {
        $model = $this->findModel($no_rawat, $kode_skala2);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_skala2' => $model->kode_skala2]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataTriaseIgddetailSkala2 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala2 Kode Skala2
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kode_skala2)
    {
        $this->findModel($no_rawat, $kode_skala2)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataTriaseIgddetailSkala2 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kode_skala2 Kode Skala2
     * @return DataTriaseIgddetailSkala2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kode_skala2)
    {
        if (($model = DataTriaseIgddetailSkala2::findOne(['no_rawat' => $no_rawat, 'kode_skala2' => $kode_skala2])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
