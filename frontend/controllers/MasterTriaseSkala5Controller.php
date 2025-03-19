<?php

namespace frontend\controllers;

use frontend\models\MasterTriaseSkala5;
use frontend\models\MasterTriaseSkala5Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterTriaseSkala5Controller implements the CRUD actions for MasterTriaseSkala5 model.
 */
class MasterTriaseSkala5Controller extends Controller
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
     * Lists all MasterTriaseSkala5 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterTriaseSkala5Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterTriaseSkala5 model.
     * @param string $kode_skala5 Kode Skala5
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_skala5)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_skala5),
        ]);
    }

    /**
     * Creates a new MasterTriaseSkala5 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterTriaseSkala5();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_skala5' => $model->kode_skala5]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterTriaseSkala5 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_skala5 Kode Skala5
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_skala5)
    {
        $model = $this->findModel($kode_skala5);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_skala5' => $model->kode_skala5]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterTriaseSkala5 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_skala5 Kode Skala5
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_skala5)
    {
        $this->findModel($kode_skala5)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterTriaseSkala5 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_skala5 Kode Skala5
     * @return MasterTriaseSkala5 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_skala5)
    {
        if (($model = MasterTriaseSkala5::findOne(['kode_skala5' => $kode_skala5])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
