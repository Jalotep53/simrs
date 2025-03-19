<?php

namespace frontend\controllers;

use frontend\models\PasienMati;
use frontend\models\PasienMatiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PasienMatiController implements the CRUD actions for PasienMati model.
 */
class PasienMatiController extends Controller
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
     * Lists all PasienMati models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PasienMatiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PasienMati model.
     * @param string $no_rkm_medis No Rkm Medis
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rkm_medis)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rkm_medis),
        ]);
    }

    /**
     * Creates a new PasienMati model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PasienMati();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PasienMati model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rkm_medis)
    {
        $model = $this->findModel($no_rkm_medis);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PasienMati model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rkm_medis)
    {
        $this->findModel($no_rkm_medis)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PasienMati model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rkm_medis No Rkm Medis
     * @return PasienMati the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rkm_medis)
    {
        if (($model = PasienMati::findOne(['no_rkm_medis' => $no_rkm_medis])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
