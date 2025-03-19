<?php

namespace frontend\controllers;

use frontend\models\SatuSehatServicerequestRadiologi;
use frontend\models\SatuSehatServicerequestRadiologiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatServicerequestRadiologiController implements the CRUD actions for SatuSehatServicerequestRadiologi model.
 */
class SatuSehatServicerequestRadiologiController extends Controller
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
     * Lists all SatuSehatServicerequestRadiologi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatServicerequestRadiologiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatServicerequestRadiologi model.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($noorder, $kd_jenis_prw)
    {
        return $this->render('view', [
            'model' => $this->findModel($noorder, $kd_jenis_prw),
        ]);
    }

    /**
     * Creates a new SatuSehatServicerequestRadiologi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatServicerequestRadiologi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatServicerequestRadiologi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($noorder, $kd_jenis_prw)
    {
        $model = $this->findModel($noorder, $kd_jenis_prw);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatServicerequestRadiologi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($noorder, $kd_jenis_prw)
    {
        $this->findModel($noorder, $kd_jenis_prw)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatServicerequestRadiologi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $noorder Noorder
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return SatuSehatServicerequestRadiologi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($noorder, $kd_jenis_prw)
    {
        if (($model = SatuSehatServicerequestRadiologi::findOne(['noorder' => $noorder, 'kd_jenis_prw' => $kd_jenis_prw])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
