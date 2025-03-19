<?php

namespace frontend\controllers;

use frontend\models\SuratKlasifikasi;
use frontend\models\SuratKlasifikasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratKlasifikasiController implements the CRUD actions for SuratKlasifikasi model.
 */
class SuratKlasifikasiController extends Controller
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
     * Lists all SuratKlasifikasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratKlasifikasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratKlasifikasi model.
     * @param string $kd Kd
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd),
        ]);
    }

    /**
     * Creates a new SuratKlasifikasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratKlasifikasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd' => $model->kd]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratKlasifikasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd Kd
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd)
    {
        $model = $this->findModel($kd);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd' => $model->kd]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratKlasifikasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd Kd
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd)
    {
        $this->findModel($kd)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratKlasifikasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd Kd
     * @return SuratKlasifikasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd)
    {
        if (($model = SuratKlasifikasi::findOne(['kd' => $kd])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
