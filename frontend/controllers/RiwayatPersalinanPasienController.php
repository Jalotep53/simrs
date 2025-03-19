<?php

namespace frontend\controllers;

use frontend\models\RiwayatPersalinanPasien;
use frontend\models\RiwayatPersalinanPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RiwayatPersalinanPasienController implements the CRUD actions for RiwayatPersalinanPasien model.
 */
class RiwayatPersalinanPasienController extends Controller
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
     * Lists all RiwayatPersalinanPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RiwayatPersalinanPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatPersalinanPasien model.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_thn Tgl Thn
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rkm_medis, $tgl_thn)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rkm_medis, $tgl_thn),
        ]);
    }

    /**
     * Creates a new RiwayatPersalinanPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RiwayatPersalinanPasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_thn' => $model->tgl_thn]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RiwayatPersalinanPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_thn Tgl Thn
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rkm_medis, $tgl_thn)
    {
        $model = $this->findModel($no_rkm_medis, $tgl_thn);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_thn' => $model->tgl_thn]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RiwayatPersalinanPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_thn Tgl Thn
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rkm_medis, $tgl_thn)
    {
        $this->findModel($no_rkm_medis, $tgl_thn)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatPersalinanPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tgl_thn Tgl Thn
     * @return RiwayatPersalinanPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rkm_medis, $tgl_thn)
    {
        if (($model = RiwayatPersalinanPasien::findOne(['no_rkm_medis' => $no_rkm_medis, 'tgl_thn' => $tgl_thn])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
