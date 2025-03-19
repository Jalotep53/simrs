<?php

namespace frontend\controllers;

use frontend\models\BerkasDigitalPerawatan;
use frontend\models\BerkasDigitalPerawatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BerkasDigitalPerawatanController implements the CRUD actions for BerkasDigitalPerawatan model.
 */
class BerkasDigitalPerawatanController extends Controller
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
     * Lists all BerkasDigitalPerawatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BerkasDigitalPerawatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BerkasDigitalPerawatan model.
     * @param string $no_rawat No Rawat
     * @param string $kode Kode
     * @param string $lokasi_file Lokasi File
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kode, $lokasi_file)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kode, $lokasi_file),
        ]);
    }

    /**
     * Creates a new BerkasDigitalPerawatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BerkasDigitalPerawatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode' => $model->kode, 'lokasi_file' => $model->lokasi_file]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BerkasDigitalPerawatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kode Kode
     * @param string $lokasi_file Lokasi File
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kode, $lokasi_file)
    {
        $model = $this->findModel($no_rawat, $kode, $lokasi_file);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode' => $model->kode, 'lokasi_file' => $model->lokasi_file]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BerkasDigitalPerawatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kode Kode
     * @param string $lokasi_file Lokasi File
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kode, $lokasi_file)
    {
        $this->findModel($no_rawat, $kode, $lokasi_file)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BerkasDigitalPerawatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kode Kode
     * @param string $lokasi_file Lokasi File
     * @return BerkasDigitalPerawatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kode, $lokasi_file)
    {
        if (($model = BerkasDigitalPerawatan::findOne(['no_rawat' => $no_rawat, 'kode' => $kode, 'lokasi_file' => $lokasi_file])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
