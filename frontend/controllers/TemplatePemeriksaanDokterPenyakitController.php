<?php

namespace frontend\controllers;

use frontend\models\TemplatePemeriksaanDokterPenyakit;
use frontend\models\TemplatePemeriksaanDokterPenyakitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplatePemeriksaanDokterPenyakitController implements the CRUD actions for TemplatePemeriksaanDokterPenyakit model.
 */
class TemplatePemeriksaanDokterPenyakitController extends Controller
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
     * Lists all TemplatePemeriksaanDokterPenyakit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemplatePemeriksaanDokterPenyakitSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemplatePemeriksaanDokterPenyakit model.
     * @param string $no_template No Template
     * @param string $kd_penyakit Kd Penyakit
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_template, $kd_penyakit)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_template, $kd_penyakit),
        ]);
    }

    /**
     * Creates a new TemplatePemeriksaanDokterPenyakit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemplatePemeriksaanDokterPenyakit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_template' => $model->no_template, 'kd_penyakit' => $model->kd_penyakit]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemplatePemeriksaanDokterPenyakit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_template No Template
     * @param string $kd_penyakit Kd Penyakit
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_template, $kd_penyakit)
    {
        $model = $this->findModel($no_template, $kd_penyakit);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_template' => $model->no_template, 'kd_penyakit' => $model->kd_penyakit]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemplatePemeriksaanDokterPenyakit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_template No Template
     * @param string $kd_penyakit Kd Penyakit
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_template, $kd_penyakit)
    {
        $this->findModel($no_template, $kd_penyakit)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemplatePemeriksaanDokterPenyakit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_template No Template
     * @param string $kd_penyakit Kd Penyakit
     * @return TemplatePemeriksaanDokterPenyakit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_template, $kd_penyakit)
    {
        if (($model = TemplatePemeriksaanDokterPenyakit::findOne(['no_template' => $no_template, 'kd_penyakit' => $kd_penyakit])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
