<?php

namespace frontend\controllers;

use frontend\models\ObatPenyakit;
use frontend\models\ObatPenyakitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObatPenyakitController implements the CRUD actions for ObatPenyakit model.
 */
class ObatPenyakitController extends Controller
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
     * Lists all ObatPenyakit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ObatPenyakitSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ObatPenyakit model.
     * @param string $kd_penyakit Kd Penyakit
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_penyakit, $kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_penyakit, $kode_brng),
        ]);
    }

    /**
     * Creates a new ObatPenyakit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ObatPenyakit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_penyakit' => $model->kd_penyakit, 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ObatPenyakit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_penyakit Kd Penyakit
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_penyakit, $kode_brng)
    {
        $model = $this->findModel($kd_penyakit, $kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_penyakit' => $model->kd_penyakit, 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ObatPenyakit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_penyakit Kd Penyakit
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_penyakit, $kode_brng)
    {
        $this->findModel($kd_penyakit, $kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ObatPenyakit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_penyakit Kd Penyakit
     * @param string $kode_brng Kode Brng
     * @return ObatPenyakit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_penyakit, $kode_brng)
    {
        if (($model = ObatPenyakit::findOne(['kd_penyakit' => $kd_penyakit, 'kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
