<?php

namespace frontend\controllers;

use frontend\models\PenyakitPd3i;
use frontend\models\PenyakitPd3iSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenyakitPd3iController implements the CRUD actions for PenyakitPd3i model.
 */
class PenyakitPd3iController extends Controller
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
     * Lists all PenyakitPd3i models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenyakitPd3iSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenyakitPd3i model.
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
     * Creates a new PenyakitPd3i model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenyakitPd3i();

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
     * Updates an existing PenyakitPd3i model.
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
     * Deletes an existing PenyakitPd3i model.
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
     * Finds the PenyakitPd3i model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_penyakit Kd Penyakit
     * @return PenyakitPd3i the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_penyakit)
    {
        if (($model = PenyakitPd3i::findOne(['kd_penyakit' => $kd_penyakit])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
