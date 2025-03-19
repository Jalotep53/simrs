<?php

namespace frontend\controllers;

use frontend\models\TemplatePemeriksaanDokterPermintaanRadiologi;
use frontend\models\TemplatePemeriksaanDokterPermintaanRadiologiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TemplatePemeriksaanDokterPermintaanRadiologiController implements the CRUD actions for TemplatePemeriksaanDokterPermintaanRadiologi model.
 */
class TemplatePemeriksaanDokterPermintaanRadiologiController extends Controller
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
     * Lists all TemplatePemeriksaanDokterPermintaanRadiologi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TemplatePemeriksaanDokterPermintaanRadiologiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TemplatePemeriksaanDokterPermintaanRadiologi model.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_template, $kd_jenis_prw)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_template, $kd_jenis_prw),
        ]);
    }

    /**
     * Creates a new TemplatePemeriksaanDokterPermintaanRadiologi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TemplatePemeriksaanDokterPermintaanRadiologi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TemplatePemeriksaanDokterPermintaanRadiologi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_template, $kd_jenis_prw)
    {
        $model = $this->findModel($no_template, $kd_jenis_prw);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TemplatePemeriksaanDokterPermintaanRadiologi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_template, $kd_jenis_prw)
    {
        $this->findModel($no_template, $kd_jenis_prw)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TemplatePemeriksaanDokterPermintaanRadiologi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_template No Template
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return TemplatePemeriksaanDokterPermintaanRadiologi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_template, $kd_jenis_prw)
    {
        if (($model = TemplatePemeriksaanDokterPermintaanRadiologi::findOne(['no_template' => $no_template, 'kd_jenis_prw' => $kd_jenis_prw])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
