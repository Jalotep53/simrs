<?php

namespace frontend\controllers;

use frontend\models\PcareTindakanRanapDiberikan;
use frontend\models\PcareTindakanRanapDiberikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PcareTindakanRanapDiberikanController implements the CRUD actions for PcareTindakanRanapDiberikan model.
 */
class PcareTindakanRanapDiberikanController extends Controller
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
     * Lists all PcareTindakanRanapDiberikan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PcareTindakanRanapDiberikanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PcareTindakanRanapDiberikan model.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kd_jenis_prw)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kd_jenis_prw),
        ]);
    }

    /**
     * Creates a new PcareTindakanRanapDiberikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PcareTindakanRanapDiberikan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kd_jenis_prw' => $model->kd_jenis_prw]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PcareTindakanRanapDiberikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kd_jenis_prw)
    {
        $model = $this->findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kd_jenis_prw);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kd_jenis_prw' => $model->kd_jenis_prw]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PcareTindakanRanapDiberikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kd_jenis_prw)
    {
        $this->findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kd_jenis_prw)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PcareTindakanRanapDiberikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $noKunjungan No Kunjungan
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return PcareTindakanRanapDiberikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $noKunjungan, $tgl_perawatan, $jam, $kd_jenis_prw)
    {
        if (($model = PcareTindakanRanapDiberikan::findOne(['no_rawat' => $no_rawat, 'noKunjungan' => $noKunjungan, 'tgl_perawatan' => $tgl_perawatan, 'jam' => $jam, 'kd_jenis_prw' => $kd_jenis_prw])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
