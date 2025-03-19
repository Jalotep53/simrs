<?php

namespace frontend\controllers;

use frontend\models\BayarPiutang;
use frontend\models\BayarPiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BayarPiutangController implements the CRUD actions for BayarPiutang model.
 */
class BayarPiutangController extends Controller
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
     * Lists all BayarPiutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BayarPiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BayarPiutang model.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $no_rawat No Rawat
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_bayar, $no_rkm_medis, $no_rawat, $kd_rek, $kd_rek_kontra)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_bayar, $no_rkm_medis, $no_rawat, $kd_rek, $kd_rek_kontra),
        ]);
    }

    /**
     * Creates a new BayarPiutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BayarPiutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'no_rkm_medis' => $model->no_rkm_medis, 'no_rawat' => $model->no_rawat, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BayarPiutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $no_rawat No Rawat
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_bayar, $no_rkm_medis, $no_rawat, $kd_rek, $kd_rek_kontra)
    {
        $model = $this->findModel($tgl_bayar, $no_rkm_medis, $no_rawat, $kd_rek, $kd_rek_kontra);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'no_rkm_medis' => $model->no_rkm_medis, 'no_rawat' => $model->no_rawat, 'kd_rek' => $model->kd_rek, 'kd_rek_kontra' => $model->kd_rek_kontra]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BayarPiutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $no_rawat No Rawat
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_bayar, $no_rkm_medis, $no_rawat, $kd_rek, $kd_rek_kontra)
    {
        $this->findModel($tgl_bayar, $no_rkm_medis, $no_rawat, $kd_rek, $kd_rek_kontra)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BayarPiutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $no_rawat No Rawat
     * @param string $kd_rek Kd Rek
     * @param string $kd_rek_kontra Kd Rek Kontra
     * @return BayarPiutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_bayar, $no_rkm_medis, $no_rawat, $kd_rek, $kd_rek_kontra)
    {
        if (($model = BayarPiutang::findOne(['tgl_bayar' => $tgl_bayar, 'no_rkm_medis' => $no_rkm_medis, 'no_rawat' => $no_rawat, 'kd_rek' => $kd_rek, 'kd_rek_kontra' => $kd_rek_kontra])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
