<?php

namespace frontend\controllers;

use frontend\models\SatuSehatMappingLokasiDepoFarmasi;
use frontend\models\SatuSehatMappingLokasiDepoFarmasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatMappingLokasiDepoFarmasiController implements the CRUD actions for SatuSehatMappingLokasiDepoFarmasi model.
 */
class SatuSehatMappingLokasiDepoFarmasiController extends Controller
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
     * Lists all SatuSehatMappingLokasiDepoFarmasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatMappingLokasiDepoFarmasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatMappingLokasiDepoFarmasi model.
     * @param string $kd_bangsal Kd Bangsal
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_bangsal)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_bangsal),
        ]);
    }

    /**
     * Creates a new SatuSehatMappingLokasiDepoFarmasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatMappingLokasiDepoFarmasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_bangsal' => $model->kd_bangsal]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatMappingLokasiDepoFarmasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_bangsal Kd Bangsal
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_bangsal)
    {
        $model = $this->findModel($kd_bangsal);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_bangsal' => $model->kd_bangsal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatMappingLokasiDepoFarmasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_bangsal Kd Bangsal
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_bangsal)
    {
        $this->findModel($kd_bangsal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatMappingLokasiDepoFarmasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_bangsal Kd Bangsal
     * @return SatuSehatMappingLokasiDepoFarmasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_bangsal)
    {
        if (($model = SatuSehatMappingLokasiDepoFarmasi::findOne(['kd_bangsal' => $kd_bangsal])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
