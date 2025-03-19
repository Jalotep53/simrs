<?php

namespace frontend\controllers;

use frontend\models\EvaluasiKinerja;
use frontend\models\EvaluasiKinerjaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EvaluasiKinerjaController implements the CRUD actions for EvaluasiKinerja model.
 */
class EvaluasiKinerjaController extends Controller
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
     * Lists all EvaluasiKinerja models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EvaluasiKinerjaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EvaluasiKinerja model.
     * @param string $kode_evaluasi Kode Evaluasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_evaluasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_evaluasi),
        ]);
    }

    /**
     * Creates a new EvaluasiKinerja model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EvaluasiKinerja();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_evaluasi' => $model->kode_evaluasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EvaluasiKinerja model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_evaluasi Kode Evaluasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_evaluasi)
    {
        $model = $this->findModel($kode_evaluasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_evaluasi' => $model->kode_evaluasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EvaluasiKinerja model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_evaluasi Kode Evaluasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_evaluasi)
    {
        $this->findModel($kode_evaluasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EvaluasiKinerja model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_evaluasi Kode Evaluasi
     * @return EvaluasiKinerja the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_evaluasi)
    {
        if (($model = EvaluasiKinerja::findOne(['kode_evaluasi' => $kode_evaluasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
