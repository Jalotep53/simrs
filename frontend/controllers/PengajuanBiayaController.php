<?php

namespace frontend\controllers;

use frontend\models\PengajuanBiaya;
use frontend\models\PengajuanBiayaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PengajuanBiayaController implements the CRUD actions for PengajuanBiaya model.
 */
class PengajuanBiayaController extends Controller
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
     * Lists all PengajuanBiaya models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PengajuanBiayaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PengajuanBiaya model.
     * @param string $no_pengajuan No Pengajuan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_pengajuan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_pengajuan),
        ]);
    }

    /**
     * Creates a new PengajuanBiaya model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PengajuanBiaya();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_pengajuan' => $model->no_pengajuan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PengajuanBiaya model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_pengajuan No Pengajuan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_pengajuan)
    {
        $model = $this->findModel($no_pengajuan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_pengajuan' => $model->no_pengajuan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PengajuanBiaya model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_pengajuan No Pengajuan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_pengajuan)
    {
        $this->findModel($no_pengajuan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PengajuanBiaya model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_pengajuan No Pengajuan
     * @return PengajuanBiaya the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_pengajuan)
    {
        if (($model = PengajuanBiaya::findOne(['no_pengajuan' => $no_pengajuan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
