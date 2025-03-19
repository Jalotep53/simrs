<?php

namespace frontend\controllers;

use frontend\models\TokoPengajuanBarang;
use frontend\models\TokoPengajuanBarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TokoPengajuanBarangController implements the CRUD actions for TokoPengajuanBarang model.
 */
class TokoPengajuanBarangController extends Controller
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
     * Lists all TokoPengajuanBarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TokoPengajuanBarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TokoPengajuanBarang model.
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
     * Creates a new TokoPengajuanBarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TokoPengajuanBarang();

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
     * Updates an existing TokoPengajuanBarang model.
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
     * Deletes an existing TokoPengajuanBarang model.
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
     * Finds the TokoPengajuanBarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_pengajuan No Pengajuan
     * @return TokoPengajuanBarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_pengajuan)
    {
        if (($model = TokoPengajuanBarang::findOne(['no_pengajuan' => $no_pengajuan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
