<?php

namespace frontend\controllers;

use frontend\models\MasterTriaseSkala3;
use frontend\models\MasterTriaseSkala3Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterTriaseSkala3Controller implements the CRUD actions for MasterTriaseSkala3 model.
 */
class MasterTriaseSkala3Controller extends Controller
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
     * Lists all MasterTriaseSkala3 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterTriaseSkala3Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterTriaseSkala3 model.
     * @param string $kode_skala3 Kode Skala3
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_skala3)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_skala3),
        ]);
    }

    /**
     * Creates a new MasterTriaseSkala3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterTriaseSkala3();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_skala3' => $model->kode_skala3]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterTriaseSkala3 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_skala3 Kode Skala3
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_skala3)
    {
        $model = $this->findModel($kode_skala3);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_skala3' => $model->kode_skala3]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterTriaseSkala3 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_skala3 Kode Skala3
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_skala3)
    {
        $this->findModel($kode_skala3)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterTriaseSkala3 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_skala3 Kode Skala3
     * @return MasterTriaseSkala3 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_skala3)
    {
        if (($model = MasterTriaseSkala3::findOne(['kode_skala3' => $kode_skala3])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
