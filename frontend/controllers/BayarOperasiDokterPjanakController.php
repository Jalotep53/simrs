<?php

namespace frontend\controllers;

use frontend\models\BayarOperasiDokterPjanak;
use frontend\models\BayarOperasiDokterPjanakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BayarOperasiDokterPjanakController implements the CRUD actions for BayarOperasiDokterPjanak model.
 */
class BayarOperasiDokterPjanakController extends Controller
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
     * Lists all BayarOperasiDokterPjanak models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BayarOperasiDokterPjanakSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BayarOperasiDokterPjanak model.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tgl_operasi Tgl Operasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_bayar, $no_rawat, $kode_paket, $tgl_operasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_bayar, $no_rawat, $kode_paket, $tgl_operasi),
        ]);
    }

    /**
     * Creates a new BayarOperasiDokterPjanak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BayarOperasiDokterPjanak();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tgl_operasi' => $model->tgl_operasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BayarOperasiDokterPjanak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tgl_operasi Tgl Operasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_bayar, $no_rawat, $kode_paket, $tgl_operasi)
    {
        $model = $this->findModel($no_bayar, $no_rawat, $kode_paket, $tgl_operasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tgl_operasi' => $model->tgl_operasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BayarOperasiDokterPjanak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tgl_operasi Tgl Operasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_bayar, $no_rawat, $kode_paket, $tgl_operasi)
    {
        $this->findModel($no_bayar, $no_rawat, $kode_paket, $tgl_operasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BayarOperasiDokterPjanak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tgl_operasi Tgl Operasi
     * @return BayarOperasiDokterPjanak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_bayar, $no_rawat, $kode_paket, $tgl_operasi)
    {
        if (($model = BayarOperasiDokterPjanak::findOne(['no_bayar' => $no_bayar, 'no_rawat' => $no_rawat, 'kode_paket' => $kode_paket, 'tgl_operasi' => $tgl_operasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
