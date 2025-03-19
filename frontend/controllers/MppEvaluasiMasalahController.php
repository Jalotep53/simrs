<?php

namespace frontend\controllers;

use frontend\models\MppEvaluasiMasalah;
use frontend\models\MppEvaluasiMasalahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MppEvaluasiMasalahController implements the CRUD actions for MppEvaluasiMasalah model.
 */
class MppEvaluasiMasalahController extends Controller
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
     * Lists all MppEvaluasiMasalah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MppEvaluasiMasalahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MppEvaluasiMasalah model.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @param string $kode_masalah Kode Masalah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tanggal, $kode_masalah)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tanggal, $kode_masalah),
        ]);
    }

    /**
     * Creates a new MppEvaluasiMasalah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MppEvaluasiMasalah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal, 'kode_masalah' => $model->kode_masalah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MppEvaluasiMasalah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @param string $kode_masalah Kode Masalah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tanggal, $kode_masalah)
    {
        $model = $this->findModel($no_rawat, $tanggal, $kode_masalah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal, 'kode_masalah' => $model->kode_masalah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MppEvaluasiMasalah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @param string $kode_masalah Kode Masalah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tanggal, $kode_masalah)
    {
        $this->findModel($no_rawat, $tanggal, $kode_masalah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MppEvaluasiMasalah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tanggal Tanggal
     * @param string $kode_masalah Kode Masalah
     * @return MppEvaluasiMasalah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tanggal, $kode_masalah)
    {
        if (($model = MppEvaluasiMasalah::findOne(['no_rawat' => $no_rawat, 'tanggal' => $tanggal, 'kode_masalah' => $kode_masalah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
