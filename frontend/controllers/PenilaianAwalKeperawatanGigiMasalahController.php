<?php

namespace frontend\controllers;

use frontend\models\PenilaianAwalKeperawatanGigiMasalah;
use frontend\models\PenilaianAwalKeperawatanGigiMasalahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenilaianAwalKeperawatanGigiMasalahController implements the CRUD actions for PenilaianAwalKeperawatanGigiMasalah model.
 */
class PenilaianAwalKeperawatanGigiMasalahController extends Controller
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
     * Lists all PenilaianAwalKeperawatanGigiMasalah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenilaianAwalKeperawatanGigiMasalahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenilaianAwalKeperawatanGigiMasalah model.
     * @param string $no_rawat No Rawat
     * @param string $kode_masalah Kode Masalah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kode_masalah)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kode_masalah),
        ]);
    }

    /**
     * Creates a new PenilaianAwalKeperawatanGigiMasalah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenilaianAwalKeperawatanGigiMasalah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_masalah' => $model->kode_masalah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PenilaianAwalKeperawatanGigiMasalah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_masalah Kode Masalah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kode_masalah)
    {
        $model = $this->findModel($no_rawat, $kode_masalah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_masalah' => $model->kode_masalah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenilaianAwalKeperawatanGigiMasalah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_masalah Kode Masalah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kode_masalah)
    {
        $this->findModel($no_rawat, $kode_masalah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenilaianAwalKeperawatanGigiMasalah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kode_masalah Kode Masalah
     * @return PenilaianAwalKeperawatanGigiMasalah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kode_masalah)
    {
        if (($model = PenilaianAwalKeperawatanGigiMasalah::findOne(['no_rawat' => $no_rawat, 'kode_masalah' => $kode_masalah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
