<?php

namespace frontend\controllers;

use frontend\models\BayarPeriksaLabPerujuk;
use frontend\models\BayarPeriksaLabPerujukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BayarPeriksaLabPerujukController implements the CRUD actions for BayarPeriksaLabPerujuk model.
 */
class BayarPeriksaLabPerujukController extends Controller
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
     * Lists all BayarPeriksaLabPerujuk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BayarPeriksaLabPerujukSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BayarPeriksaLabPerujuk model.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam),
        ]);
    }

    /**
     * Creates a new BayarPeriksaLabPerujuk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BayarPeriksaLabPerujuk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BayarPeriksaLabPerujuk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam)
    {
        $model = $this->findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BayarPeriksaLabPerujuk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam)
    {
        $this->findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BayarPeriksaLabPerujuk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return BayarPeriksaLabPerujuk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam)
    {
        if (($model = BayarPeriksaLabPerujuk::findOne(['no_bayar' => $no_bayar, 'no_rawat' => $no_rawat, 'kd_jenis_prw' => $kd_jenis_prw, 'tgl_periksa' => $tgl_periksa, 'jam' => $jam])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
