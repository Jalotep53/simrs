<?php

namespace frontend\controllers;

use frontend\models\RiwayatImunisasi;
use frontend\models\RiwayatImunisasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatImunisasiController implements the CRUD actions for RiwayatImunisasi model.
 */
class RiwayatImunisasiController extends Controller
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
     * Lists all RiwayatImunisasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatImunisasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatImunisasi model.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_imunisasi Kode Imunisasi
     * @param int $no_imunisasi No Imunisasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rkm_medis, $kode_imunisasi, $no_imunisasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rkm_medis, $kode_imunisasi, $no_imunisasi),
        ]);
    }

    /**
     * Creates a new RiwayatImunisasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RiwayatImunisasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_imunisasi' => $model->kode_imunisasi, 'no_imunisasi' => $model->no_imunisasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RiwayatImunisasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_imunisasi Kode Imunisasi
     * @param int $no_imunisasi No Imunisasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rkm_medis, $kode_imunisasi, $no_imunisasi)
    {
        $model = $this->findModel($no_rkm_medis, $kode_imunisasi, $no_imunisasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_imunisasi' => $model->kode_imunisasi, 'no_imunisasi' => $model->no_imunisasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RiwayatImunisasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_imunisasi Kode Imunisasi
     * @param int $no_imunisasi No Imunisasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rkm_medis, $kode_imunisasi, $no_imunisasi)
    {
        $this->findModel($no_rkm_medis, $kode_imunisasi, $no_imunisasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatImunisasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_imunisasi Kode Imunisasi
     * @param int $no_imunisasi No Imunisasi
     * @return RiwayatImunisasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rkm_medis, $kode_imunisasi, $no_imunisasi)
    {
        if (($model = RiwayatImunisasi::findOne(['no_rkm_medis' => $no_rkm_medis, 'kode_imunisasi' => $kode_imunisasi, 'no_imunisasi' => $no_imunisasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
