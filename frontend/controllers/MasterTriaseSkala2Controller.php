<?php

namespace frontend\controllers;

use frontend\models\MasterTriaseSkala2;
use frontend\models\MasterTriaseSkala2Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterTriaseSkala2Controller implements the CRUD actions for MasterTriaseSkala2 model.
 */
class MasterTriaseSkala2Controller extends Controller
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
     * Lists all MasterTriaseSkala2 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterTriaseSkala2Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterTriaseSkala2 model.
     * @param string $kode_skala2 Kode Skala2
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_skala2)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_skala2),
        ]);
    }

    /**
     * Creates a new MasterTriaseSkala2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterTriaseSkala2();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_skala2' => $model->kode_skala2]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterTriaseSkala2 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_skala2 Kode Skala2
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_skala2)
    {
        $model = $this->findModel($kode_skala2);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_skala2' => $model->kode_skala2]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterTriaseSkala2 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_skala2 Kode Skala2
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_skala2)
    {
        $this->findModel($kode_skala2)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterTriaseSkala2 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_skala2 Kode Skala2
     * @return MasterTriaseSkala2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_skala2)
    {
        if (($model = MasterTriaseSkala2::findOne(['kode_skala2' => $kode_skala2])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
