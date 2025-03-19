<?php

namespace frontend\controllers;

use frontend\models\BiayaHarian;
use frontend\models\BiayaHarianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BiayaHarianController implements the CRUD actions for BiayaHarian model.
 */
class BiayaHarianController extends Controller
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
     * Lists all BiayaHarian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BiayaHarianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BiayaHarian model.
     * @param string $kd_kamar Kd Kamar
     * @param string $nama_biaya Nama Biaya
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_kamar, $nama_biaya)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_kamar, $nama_biaya),
        ]);
    }

    /**
     * Creates a new BiayaHarian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BiayaHarian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BiayaHarian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_kamar Kd Kamar
     * @param string $nama_biaya Nama Biaya
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_kamar, $nama_biaya)
    {
        $model = $this->findModel($kd_kamar, $nama_biaya);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_kamar' => $model->kd_kamar, 'nama_biaya' => $model->nama_biaya]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BiayaHarian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_kamar Kd Kamar
     * @param string $nama_biaya Nama Biaya
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_kamar, $nama_biaya)
    {
        $this->findModel($kd_kamar, $nama_biaya)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BiayaHarian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_kamar Kd Kamar
     * @param string $nama_biaya Nama Biaya
     * @return BiayaHarian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_kamar, $nama_biaya)
    {
        if (($model = BiayaHarian::findOne(['kd_kamar' => $kd_kamar, 'nama_biaya' => $nama_biaya])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
