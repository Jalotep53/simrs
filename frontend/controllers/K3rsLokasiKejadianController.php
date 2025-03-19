<?php

namespace frontend\controllers;

use frontend\models\K3rsLokasiKejadian;
use frontend\models\K3rsLokasiKejadianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsLokasiKejadianController implements the CRUD actions for K3rsLokasiKejadian model.
 */
class K3rsLokasiKejadianController extends Controller
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
     * Lists all K3rsLokasiKejadian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsLokasiKejadianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsLokasiKejadian model.
     * @param string $kode_lokasi Kode Lokasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_lokasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_lokasi),
        ]);
    }

    /**
     * Creates a new K3rsLokasiKejadian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsLokasiKejadian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_lokasi' => $model->kode_lokasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsLokasiKejadian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_lokasi Kode Lokasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_lokasi)
    {
        $model = $this->findModel($kode_lokasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_lokasi' => $model->kode_lokasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsLokasiKejadian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_lokasi Kode Lokasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_lokasi)
    {
        $this->findModel($kode_lokasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsLokasiKejadian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_lokasi Kode Lokasi
     * @return K3rsLokasiKejadian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_lokasi)
    {
        if (($model = K3rsLokasiKejadian::findOne(['kode_lokasi' => $kode_lokasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
