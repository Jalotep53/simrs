<?php

namespace frontend\controllers;

use frontend\models\BayarPemesanan;
use frontend\models\BayarPemesananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BayarPemesananController implements the CRUD actions for BayarPemesanan model.
 */
class BayarPemesananController extends Controller
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
     * Lists all BayarPemesanan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BayarPemesananSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BayarPemesanan model.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_faktur No Faktur
     * @param string $no_bukti No Bukti
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_bayar, $no_faktur, $no_bukti)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_bayar, $no_faktur, $no_bukti),
        ]);
    }

    /**
     * Creates a new BayarPemesanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BayarPemesanan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'no_faktur' => $model->no_faktur, 'no_bukti' => $model->no_bukti]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BayarPemesanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_faktur No Faktur
     * @param string $no_bukti No Bukti
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_bayar, $no_faktur, $no_bukti)
    {
        $model = $this->findModel($tgl_bayar, $no_faktur, $no_bukti);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'no_faktur' => $model->no_faktur, 'no_bukti' => $model->no_bukti]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BayarPemesanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_faktur No Faktur
     * @param string $no_bukti No Bukti
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_bayar, $no_faktur, $no_bukti)
    {
        $this->findModel($tgl_bayar, $no_faktur, $no_bukti)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BayarPemesanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_faktur No Faktur
     * @param string $no_bukti No Bukti
     * @return BayarPemesanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_bayar, $no_faktur, $no_bukti)
    {
        if (($model = BayarPemesanan::findOne(['tgl_bayar' => $tgl_bayar, 'no_faktur' => $no_faktur, 'no_bukti' => $no_bukti])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
