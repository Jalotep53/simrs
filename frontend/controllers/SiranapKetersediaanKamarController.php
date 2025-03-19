<?php

namespace frontend\controllers;

use frontend\models\SiranapKetersediaanKamar;
use frontend\models\SiranapKetersediaanKamarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SiranapKetersediaanKamarController implements the CRUD actions for SiranapKetersediaanKamar model.
 */
class SiranapKetersediaanKamarController extends Controller
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
     * Lists all SiranapKetersediaanKamar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SiranapKetersediaanKamarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SiranapKetersediaanKamar model.
     * @param string $kode_ruang_siranap Kode Ruang Siranap
     * @param string $kelas_ruang_siranap Kelas Ruang Siranap
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kelas Kelas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_ruang_siranap, $kelas_ruang_siranap, $kd_bangsal, $kelas)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_ruang_siranap, $kelas_ruang_siranap, $kd_bangsal, $kelas),
        ]);
    }

    /**
     * Creates a new SiranapKetersediaanKamar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SiranapKetersediaanKamar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_ruang_siranap' => $model->kode_ruang_siranap, 'kelas_ruang_siranap' => $model->kelas_ruang_siranap, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SiranapKetersediaanKamar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_ruang_siranap Kode Ruang Siranap
     * @param string $kelas_ruang_siranap Kelas Ruang Siranap
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kelas Kelas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_ruang_siranap, $kelas_ruang_siranap, $kd_bangsal, $kelas)
    {
        $model = $this->findModel($kode_ruang_siranap, $kelas_ruang_siranap, $kd_bangsal, $kelas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_ruang_siranap' => $model->kode_ruang_siranap, 'kelas_ruang_siranap' => $model->kelas_ruang_siranap, 'kd_bangsal' => $model->kd_bangsal, 'kelas' => $model->kelas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SiranapKetersediaanKamar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_ruang_siranap Kode Ruang Siranap
     * @param string $kelas_ruang_siranap Kelas Ruang Siranap
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kelas Kelas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_ruang_siranap, $kelas_ruang_siranap, $kd_bangsal, $kelas)
    {
        $this->findModel($kode_ruang_siranap, $kelas_ruang_siranap, $kd_bangsal, $kelas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SiranapKetersediaanKamar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_ruang_siranap Kode Ruang Siranap
     * @param string $kelas_ruang_siranap Kelas Ruang Siranap
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kelas Kelas
     * @return SiranapKetersediaanKamar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_ruang_siranap, $kelas_ruang_siranap, $kd_bangsal, $kelas)
    {
        if (($model = SiranapKetersediaanKamar::findOne(['kode_ruang_siranap' => $kode_ruang_siranap, 'kelas_ruang_siranap' => $kelas_ruang_siranap, 'kd_bangsal' => $kd_bangsal, 'kelas' => $kelas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
