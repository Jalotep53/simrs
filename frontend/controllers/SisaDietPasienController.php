<?php

namespace frontend\controllers;

use frontend\models\SisaDietPasien;
use frontend\models\SisaDietPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SisaDietPasienController implements the CRUD actions for SisaDietPasien model.
 */
class SisaDietPasienController extends Controller
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
     * Lists all SisaDietPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SisaDietPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SisaDietPasien model.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kd_kamar, $tanggal, $waktu)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kd_kamar, $tanggal, $waktu),
        ]);
    }

    /**
     * Creates a new SisaDietPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SisaDietPasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SisaDietPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kd_kamar, $tanggal, $waktu)
    {
        $model = $this->findModel($no_rawat, $kd_kamar, $tanggal, $waktu);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_kamar' => $model->kd_kamar, 'tanggal' => $model->tanggal, 'waktu' => $model->waktu]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SisaDietPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kd_kamar, $tanggal, $waktu)
    {
        $this->findModel($no_rawat, $kd_kamar, $tanggal, $waktu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SisaDietPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kd_kamar Kd Kamar
     * @param string $tanggal Tanggal
     * @param string $waktu Waktu
     * @return SisaDietPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kd_kamar, $tanggal, $waktu)
    {
        if (($model = SisaDietPasien::findOne(['no_rawat' => $no_rawat, 'kd_kamar' => $kd_kamar, 'tanggal' => $tanggal, 'waktu' => $waktu])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
