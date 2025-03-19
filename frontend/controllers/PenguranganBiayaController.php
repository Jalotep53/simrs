<?php

namespace frontend\controllers;

use frontend\models\PenguranganBiaya;
use frontend\models\PenguranganBiayaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenguranganBiayaController implements the CRUD actions for PenguranganBiaya model.
 */
class PenguranganBiayaController extends Controller
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
     * Lists all PenguranganBiaya models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenguranganBiayaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenguranganBiaya model.
     * @param string $no_rawat No Rawat
     * @param string $nama_pengurangan Nama Pengurangan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $nama_pengurangan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $nama_pengurangan),
        ]);
    }

    /**
     * Creates a new PenguranganBiaya model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenguranganBiaya();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_pengurangan' => $model->nama_pengurangan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PenguranganBiaya model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_pengurangan Nama Pengurangan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $nama_pengurangan)
    {
        $model = $this->findModel($no_rawat, $nama_pengurangan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_pengurangan' => $model->nama_pengurangan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenguranganBiaya model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_pengurangan Nama Pengurangan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $nama_pengurangan)
    {
        $this->findModel($no_rawat, $nama_pengurangan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenguranganBiaya model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $nama_pengurangan Nama Pengurangan
     * @return PenguranganBiaya the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $nama_pengurangan)
    {
        if (($model = PenguranganBiaya::findOne(['no_rawat' => $no_rawat, 'nama_pengurangan' => $nama_pengurangan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
