<?php

namespace frontend\controllers;

use frontend\models\PcareObatDiberikan;
use frontend\models\PcareObatDiberikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PcareObatDiberikanController implements the CRUD actions for PcareObatDiberikan model.
 */
class PcareObatDiberikanController extends Controller
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
     * Lists all PcareObatDiberikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PcareObatDiberikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PcareObatDiberikan model.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kode_brng, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kode_brng, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new PcareObatDiberikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PcareObatDiberikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PcareObatDiberikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kode_brng, $no_batch, $no_faktur)
    {
        $model = $this->findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kode_brng, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PcareObatDiberikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kode_brng, $no_batch, $no_faktur)
    {
        $this->findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kode_brng, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PcareObatDiberikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return PcareObatDiberikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kode_brng, $no_batch, $no_faktur)
    {
        if (($model = PcareObatDiberikan::findOne(['no_rawat' => $no_rawat, 'noKunjungan' => $noKunjungan, 'tgl_perawatan' => $tgl_perawatan, 'jam' => $jam, 'kode_brng' => $kode_brng, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
