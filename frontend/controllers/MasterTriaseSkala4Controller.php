<?php

namespace frontend\controllers;

use frontend\models\MasterTriaseSkala4;
use frontend\models\MasterTriaseSkala4Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterTriaseSkala4Controller implements the CRUD actions for MasterTriaseSkala4 model.
 */
class MasterTriaseSkala4Controller extends Controller
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
     * Lists all MasterTriaseSkala4 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterTriaseSkala4Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterTriaseSkala4 model.
     * @param string $kode_skala4 Kode Skala4
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_skala4)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_skala4),
        ]);
    }

    /**
     * Creates a new MasterTriaseSkala4 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterTriaseSkala4();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_skala4' => $model->kode_skala4]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterTriaseSkala4 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_skala4 Kode Skala4
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_skala4)
    {
        $model = $this->findModel($kode_skala4);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_skala4' => $model->kode_skala4]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterTriaseSkala4 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_skala4 Kode Skala4
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_skala4)
    {
        $this->findModel($kode_skala4)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterTriaseSkala4 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_skala4 Kode Skala4
     * @return MasterTriaseSkala4 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_skala4)
    {
        if (($model = MasterTriaseSkala4::findOne(['kode_skala4' => $kode_skala4])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
