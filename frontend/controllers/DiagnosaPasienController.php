<?php

namespace frontend\controllers;

use frontend\models\DiagnosaPasien;
use frontend\models\DiagnosaPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DiagnosaPasienController implements the CRUD actions for DiagnosaPasien model.
 */
class DiagnosaPasienController extends Controller
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
     * Lists all DiagnosaPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DiagnosaPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DiagnosaPasien model.
     * @param string $no_rawat No Rawat
     * @param string $kd_penyakit Kd Penyakit
     * @param string $status Status
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kd_penyakit, $status)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kd_penyakit, $status),
        ]);
    }

    /**
     * Creates a new DiagnosaPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DiagnosaPasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_penyakit' => $model->kd_penyakit, 'status' => $model->status]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DiagnosaPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_penyakit Kd Penyakit
     * @param string $status Status
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kd_penyakit, $status)
    {
        $model = $this->findModel($no_rawat, $kd_penyakit, $status);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_penyakit' => $model->kd_penyakit, 'status' => $model->status]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DiagnosaPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_penyakit Kd Penyakit
     * @param string $status Status
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kd_penyakit, $status)
    {
        $this->findModel($no_rawat, $kd_penyakit, $status)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DiagnosaPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kd_penyakit Kd Penyakit
     * @param string $status Status
     * @return DiagnosaPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kd_penyakit, $status)
    {
        if (($model = DiagnosaPasien::findOne(['no_rawat' => $no_rawat, 'kd_penyakit' => $kd_penyakit, 'status' => $status])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
