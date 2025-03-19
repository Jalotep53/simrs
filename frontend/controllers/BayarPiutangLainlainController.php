<?php

namespace frontend\controllers;

use frontend\models\BayarPiutangLainlain;
use frontend\models\BayarPiutangLainlainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BayarPiutangLainlainController implements the CRUD actions for BayarPiutangLainlain model.
 */
class BayarPiutangLainlainController extends Controller
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
     * Lists all BayarPiutangLainlain models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BayarPiutangLainlainSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BayarPiutangLainlain model.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $kode_peminjam Kode Peminjam
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $nama_bayar Nama Bayar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_bayar, $kode_peminjam, $nota_piutang, $kd_rek, $nama_bayar)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_bayar, $kode_peminjam, $nota_piutang, $kd_rek, $nama_bayar),
        ]);
    }

    /**
     * Creates a new BayarPiutangLainlain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BayarPiutangLainlain();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'kode_peminjam' => $model->kode_peminjam, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'nama_bayar' => $model->nama_bayar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BayarPiutangLainlain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $kode_peminjam Kode Peminjam
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $nama_bayar Nama Bayar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_bayar, $kode_peminjam, $nota_piutang, $kd_rek, $nama_bayar)
    {
        $model = $this->findModel($tgl_bayar, $kode_peminjam, $nota_piutang, $kd_rek, $nama_bayar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_bayar' => $model->tgl_bayar, 'kode_peminjam' => $model->kode_peminjam, 'nota_piutang' => $model->nota_piutang, 'kd_rek' => $model->kd_rek, 'nama_bayar' => $model->nama_bayar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BayarPiutangLainlain model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $kode_peminjam Kode Peminjam
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $nama_bayar Nama Bayar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_bayar, $kode_peminjam, $nota_piutang, $kd_rek, $nama_bayar)
    {
        $this->findModel($tgl_bayar, $kode_peminjam, $nota_piutang, $kd_rek, $nama_bayar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BayarPiutangLainlain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_bayar Tgl Bayar
     * @param string $kode_peminjam Kode Peminjam
     * @param string $nota_piutang Nota Piutang
     * @param string $kd_rek Kd Rek
     * @param string $nama_bayar Nama Bayar
     * @return BayarPiutangLainlain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_bayar, $kode_peminjam, $nota_piutang, $kd_rek, $nama_bayar)
    {
        if (($model = BayarPiutangLainlain::findOne(['tgl_bayar' => $tgl_bayar, 'kode_peminjam' => $kode_peminjam, 'nota_piutang' => $nota_piutang, 'kd_rek' => $kd_rek, 'nama_bayar' => $nama_bayar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
