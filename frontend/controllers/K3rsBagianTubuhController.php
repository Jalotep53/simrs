<?php

namespace frontend\controllers;

use frontend\models\K3rsBagianTubuh;
use frontend\models\K3rsBagianTubuhSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsBagianTubuhController implements the CRUD actions for K3rsBagianTubuh model.
 */
class K3rsBagianTubuhController extends Controller
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
     * Lists all K3rsBagianTubuh models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsBagianTubuhSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsBagianTubuh model.
     * @param string $kode_bagian Kode Bagian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_bagian)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_bagian),
        ]);
    }

    /**
     * Creates a new K3rsBagianTubuh model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsBagianTubuh();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_bagian' => $model->kode_bagian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsBagianTubuh model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_bagian Kode Bagian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_bagian)
    {
        $model = $this->findModel($kode_bagian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_bagian' => $model->kode_bagian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsBagianTubuh model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_bagian Kode Bagian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_bagian)
    {
        $this->findModel($kode_bagian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsBagianTubuh model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_bagian Kode Bagian
     * @return K3rsBagianTubuh the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_bagian)
    {
        if (($model = K3rsBagianTubuh::findOne(['kode_bagian' => $kode_bagian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
