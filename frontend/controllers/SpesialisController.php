<?php

namespace frontend\controllers;

use frontend\models\Spesialis;
use frontend\models\SpesialisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SpesialisController implements the CRUD actions for Spesialis model.
 */
class SpesialisController extends Controller
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
     * Lists all Spesialis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SpesialisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Spesialis model.
     * @param string $kd_sps Kd Sps
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_sps)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_sps),
        ]);
    }

    /**
     * Creates a new Spesialis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Spesialis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_sps' => $model->kd_sps]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Spesialis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_sps Kd Sps
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_sps)
    {
        $model = $this->findModel($kd_sps);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_sps' => $model->kd_sps]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Spesialis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_sps Kd Sps
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_sps)
    {
        $this->findModel($kd_sps)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Spesialis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_sps Kd Sps
     * @return Spesialis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_sps)
    {
        if (($model = Spesialis::findOne(['kd_sps' => $kd_sps])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
