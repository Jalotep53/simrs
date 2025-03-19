<?php

namespace frontend\controllers;

use frontend\models\RujukanranapDokterRs;
use frontend\models\RujukanranapDokterRsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RujukanranapDokterRsController implements the CRUD actions for RujukanranapDokterRs model.
 */
class RujukanranapDokterRsController extends Controller
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
     * Lists all RujukanranapDokterRs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RujukanranapDokterRsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RujukanranapDokterRs model.
     * @param string $tanggal Tanggal
     * @param string $kd_dokter Kd Dokter
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kd_kamar Kd Kamar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $kd_dokter, $no_rkm_medis, $kd_kamar)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $kd_dokter, $no_rkm_medis, $kd_kamar),
        ]);
    }

    /**
     * Creates a new RujukanranapDokterRs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RujukanranapDokterRs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'kd_dokter' => $model->kd_dokter, 'no_rkm_medis' => $model->no_rkm_medis, 'kd_kamar' => $model->kd_kamar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RujukanranapDokterRs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $kd_dokter Kd Dokter
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kd_kamar Kd Kamar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $kd_dokter, $no_rkm_medis, $kd_kamar)
    {
        $model = $this->findModel($tanggal, $kd_dokter, $no_rkm_medis, $kd_kamar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'kd_dokter' => $model->kd_dokter, 'no_rkm_medis' => $model->no_rkm_medis, 'kd_kamar' => $model->kd_kamar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RujukanranapDokterRs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $kd_dokter Kd Dokter
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kd_kamar Kd Kamar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $kd_dokter, $no_rkm_medis, $kd_kamar)
    {
        $this->findModel($tanggal, $kd_dokter, $no_rkm_medis, $kd_kamar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RujukanranapDokterRs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $kd_dokter Kd Dokter
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kd_kamar Kd Kamar
     * @return RujukanranapDokterRs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $kd_dokter, $no_rkm_medis, $kd_kamar)
    {
        if (($model = RujukanranapDokterRs::findOne(['tanggal' => $tanggal, 'kd_dokter' => $kd_dokter, 'no_rkm_medis' => $no_rkm_medis, 'kd_kamar' => $kd_kamar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
