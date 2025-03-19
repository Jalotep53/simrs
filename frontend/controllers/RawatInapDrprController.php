<?php

namespace frontend\controllers;

use frontend\models\RawatInapDrpr;
use frontend\models\RawatInapDrprSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RawatInapDrprController implements the CRUD actions for RawatInapDrpr model.
 */
class RawatInapDrprController extends Controller
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
     * Lists all RawatInapDrpr models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RawatInapDrprSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RawatInapDrpr model.
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_dokter Kd Dokter
     * @param string $nip Nip
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kd_jenis_prw, $kd_dokter, $nip, $tgl_perawatan, $jam_rawat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kd_jenis_prw, $kd_dokter, $nip, $tgl_perawatan, $jam_rawat),
        ]);
    }

    /**
     * Creates a new RawatInapDrpr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RawatInapDrpr();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_dokter' => $model->kd_dokter, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RawatInapDrpr model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_dokter Kd Dokter
     * @param string $nip Nip
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kd_jenis_prw, $kd_dokter, $nip, $tgl_perawatan, $jam_rawat)
    {
        $model = $this->findModel($no_rawat, $kd_jenis_prw, $kd_dokter, $nip, $tgl_perawatan, $jam_rawat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_dokter' => $model->kd_dokter, 'nip' => $model->nip, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RawatInapDrpr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_dokter Kd Dokter
     * @param string $nip Nip
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kd_jenis_prw, $kd_dokter, $nip, $tgl_perawatan, $jam_rawat)
    {
        $this->findModel($no_rawat, $kd_jenis_prw, $kd_dokter, $nip, $tgl_perawatan, $jam_rawat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RawatInapDrpr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $kd_dokter Kd Dokter
     * @param string $nip Nip
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return RawatInapDrpr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kd_jenis_prw, $kd_dokter, $nip, $tgl_perawatan, $jam_rawat)
    {
        if (($model = RawatInapDrpr::findOne(['no_rawat' => $no_rawat, 'kd_jenis_prw' => $kd_jenis_prw, 'kd_dokter' => $kd_dokter, 'nip' => $nip, 'tgl_perawatan' => $tgl_perawatan, 'jam_rawat' => $jam_rawat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
