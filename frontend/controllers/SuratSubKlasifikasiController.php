<?php

namespace frontend\controllers;

use frontend\models\SuratSubKlasifikasi;
use frontend\models\AntriapotekSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratSubKlasifikasiController implements the CRUD actions for SuratSubKlasifikasi model.
 */
class SuratSubKlasifikasiController extends Controller
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
     * Lists all SuratSubKlasifikasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AntriapotekSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratSubKlasifikasi model.
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
     * Creates a new SuratSubKlasifikasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratSubKlasifikasi();

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
     * Updates an existing SuratSubKlasifikasi model.
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
     * Deletes an existing SuratSubKlasifikasi model.
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
     * Finds the SuratSubKlasifikasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd Kd
     * @return SuratSubKlasifikasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd)
    {
        if (($model = SuratSubKlasifikasi::findOne(['kd' => $kd])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
