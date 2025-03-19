<?php

namespace frontend\controllers;

use frontend\models\SatuSehatMappingLokasiRalan;
use frontend\models\SatuSehatMappingLokasiRalanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatMappingLokasiRalanController implements the CRUD actions for SatuSehatMappingLokasiRalan model.
 */
class SatuSehatMappingLokasiRalanController extends Controller
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
     * Lists all SatuSehatMappingLokasiRalan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatMappingLokasiRalanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatMappingLokasiRalan model.
     * @param string $kd_poli Kd Poli
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_poli)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_poli),
        ]);
    }

    /**
     * Creates a new SatuSehatMappingLokasiRalan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatMappingLokasiRalan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_poli' => $model->kd_poli]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatMappingLokasiRalan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_poli Kd Poli
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_poli)
    {
        $model = $this->findModel($kd_poli);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_poli' => $model->kd_poli]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatMappingLokasiRalan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_poli Kd Poli
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_poli)
    {
        $this->findModel($kd_poli)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatMappingLokasiRalan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_poli Kd Poli
     * @return SatuSehatMappingLokasiRalan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_poli)
    {
        if (($model = SatuSehatMappingLokasiRalan::findOne(['kd_poli' => $kd_poli])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
