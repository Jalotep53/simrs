<?php

namespace frontend\controllers;

use frontend\models\Operasi;
use frontend\models\OperasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OperasiController implements the CRUD actions for Operasi model.
 */
class OperasiController extends Controller
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
     * Lists all Operasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new OperasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Operasi model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_operasi Tgl Operasi
     * @param string $kode_paket Kode Paket
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_operasi, $kode_paket)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_operasi, $kode_paket),
        ]);
    }

    /**
     * Creates a new Operasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Operasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_operasi' => $model->tgl_operasi, 'kode_paket' => $model->kode_paket]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Operasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_operasi Tgl Operasi
     * @param string $kode_paket Kode Paket
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_operasi, $kode_paket)
    {
        $model = $this->findModel($no_rawat, $tgl_operasi, $kode_paket);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_operasi' => $model->tgl_operasi, 'kode_paket' => $model->kode_paket]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Operasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_operasi Tgl Operasi
     * @param string $kode_paket Kode Paket
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_operasi, $kode_paket)
    {
        $this->findModel($no_rawat, $tgl_operasi, $kode_paket)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Operasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_operasi Tgl Operasi
     * @param string $kode_paket Kode Paket
     * @return Operasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_operasi, $kode_paket)
    {
        if (($model = Operasi::findOne(['no_rawat' => $no_rawat, 'tgl_operasi' => $tgl_operasi, 'kode_paket' => $kode_paket])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
