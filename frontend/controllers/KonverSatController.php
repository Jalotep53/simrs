<?php

namespace frontend\controllers;

use frontend\models\KonverSat;
use frontend\models\KonverSatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KonverSatController implements the CRUD actions for KonverSat model.
 */
class KonverSatController extends Controller
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
     * Lists all KonverSat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KonverSatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KonverSat model.
     * @param float $nilai Nilai
     * @param string $kode_sat Kode Sat
     * @param float $nilai_konversi Nilai Konversi
     * @param string $sat_konversi Sat Konversi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nilai, $kode_sat, $nilai_konversi, $sat_konversi)
    {
        return $this->render('view', [
            'model' => $this->findModel($nilai, $kode_sat, $nilai_konversi, $sat_konversi),
        ]);
    }

    /**
     * Creates a new KonverSat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KonverSat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nilai' => $model->nilai, 'kode_sat' => $model->kode_sat, 'nilai_konversi' => $model->nilai_konversi, 'sat_konversi' => $model->sat_konversi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KonverSat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param float $nilai Nilai
     * @param string $kode_sat Kode Sat
     * @param float $nilai_konversi Nilai Konversi
     * @param string $sat_konversi Sat Konversi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nilai, $kode_sat, $nilai_konversi, $sat_konversi)
    {
        $model = $this->findModel($nilai, $kode_sat, $nilai_konversi, $sat_konversi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nilai' => $model->nilai, 'kode_sat' => $model->kode_sat, 'nilai_konversi' => $model->nilai_konversi, 'sat_konversi' => $model->sat_konversi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KonverSat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param float $nilai Nilai
     * @param string $kode_sat Kode Sat
     * @param float $nilai_konversi Nilai Konversi
     * @param string $sat_konversi Sat Konversi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nilai, $kode_sat, $nilai_konversi, $sat_konversi)
    {
        $this->findModel($nilai, $kode_sat, $nilai_konversi, $sat_konversi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KonverSat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param float $nilai Nilai
     * @param string $kode_sat Kode Sat
     * @param float $nilai_konversi Nilai Konversi
     * @param string $sat_konversi Sat Konversi
     * @return KonverSat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nilai, $kode_sat, $nilai_konversi, $sat_konversi)
    {
        if (($model = KonverSat::findOne(['nilai' => $nilai, 'kode_sat' => $kode_sat, 'nilai_konversi' => $nilai_konversi, 'sat_konversi' => $sat_konversi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
