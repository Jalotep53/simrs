<?php

namespace frontend\controllers;

use frontend\models\TemporaryTambahanPotongan;
use frontend\models\TemporaryTambahanPotonganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemporaryTambahanPotonganController implements the CRUD actions for TemporaryTambahanPotongan model.
 */
class TemporaryTambahanPotonganController extends Controller
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
     * Lists all TemporaryTambahanPotongan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemporaryTambahanPotonganSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemporaryTambahanPotongan model.
     * @param string $no_rawat No Rawat
     * @param string $nama_tambahan Nama Tambahan
     * @param string $status Status
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $nama_tambahan, $status)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $nama_tambahan, $status),
        ]);
    }

    /**
     * Creates a new TemporaryTambahanPotongan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemporaryTambahanPotongan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_tambahan' => $model->nama_tambahan, 'status' => $model->status]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemporaryTambahanPotongan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_tambahan Nama Tambahan
     * @param string $status Status
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $nama_tambahan, $status)
    {
        $model = $this->findModel($no_rawat, $nama_tambahan, $status);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_tambahan' => $model->nama_tambahan, 'status' => $model->status]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemporaryTambahanPotongan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_tambahan Nama Tambahan
     * @param string $status Status
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $nama_tambahan, $status)
    {
        $this->findModel($no_rawat, $nama_tambahan, $status)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemporaryTambahanPotongan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $nama_tambahan Nama Tambahan
     * @param string $status Status
     * @return TemporaryTambahanPotongan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $nama_tambahan, $status)
    {
        if (($model = TemporaryTambahanPotongan::findOne(['no_rawat' => $no_rawat, 'nama_tambahan' => $nama_tambahan, 'status' => $status])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
