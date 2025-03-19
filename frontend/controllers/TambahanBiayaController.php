<?php

namespace frontend\controllers;

use frontend\models\TambahanBiaya;
use frontend\models\TambahanBiayaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TambahanBiayaController implements the CRUD actions for TambahanBiaya model.
 */
class TambahanBiayaController extends Controller
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
     * Lists all TambahanBiaya models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TambahanBiayaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TambahanBiaya model.
     * @param string $no_rawat No Rawat
     * @param string $nama_biaya Nama Biaya
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $nama_biaya)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $nama_biaya),
        ]);
    }

    /**
     * Creates a new TambahanBiaya model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TambahanBiaya();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_biaya' => $model->nama_biaya]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TambahanBiaya model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_biaya Nama Biaya
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $nama_biaya)
    {
        $model = $this->findModel($no_rawat, $nama_biaya);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'nama_biaya' => $model->nama_biaya]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TambahanBiaya model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $nama_biaya Nama Biaya
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $nama_biaya)
    {
        $this->findModel($no_rawat, $nama_biaya)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TambahanBiaya model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $nama_biaya Nama Biaya
     * @return TambahanBiaya the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $nama_biaya)
    {
        if (($model = TambahanBiaya::findOne(['no_rawat' => $no_rawat, 'nama_biaya' => $nama_biaya])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
