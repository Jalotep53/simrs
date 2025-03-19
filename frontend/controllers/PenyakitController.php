<?php

namespace frontend\controllers;

use frontend\models\Penyakit;
use frontend\models\PenyakitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenyakitController implements the CRUD actions for Penyakit model.
 */
class PenyakitController extends Controller
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
     * Lists all Penyakit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenyakitSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penyakit model.
     * @param string $kd_penyakit Kd Penyakit
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_penyakit)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_penyakit),
        ]);
    }

    /**
     * Creates a new Penyakit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Penyakit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_penyakit' => $model->kd_penyakit]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Penyakit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_penyakit Kd Penyakit
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_penyakit)
    {
        $model = $this->findModel($kd_penyakit);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_penyakit' => $model->kd_penyakit]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Penyakit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_penyakit Kd Penyakit
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_penyakit)
    {
        $this->findModel($kd_penyakit)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penyakit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_penyakit Kd Penyakit
     * @return Penyakit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_penyakit)
    {
        if (($model = Penyakit::findOne(['kd_penyakit' => $kd_penyakit])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
