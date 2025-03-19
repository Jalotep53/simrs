<?php

namespace frontend\controllers;

use frontend\models\MatrikAkunJnsPerawatan;
use frontend\models\MatrikAkunJnsPerawatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MatrikAkunJnsPerawatanController implements the CRUD actions for MatrikAkunJnsPerawatan model.
 */
class MatrikAkunJnsPerawatanController extends Controller
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
     * Lists all MatrikAkunJnsPerawatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MatrikAkunJnsPerawatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MatrikAkunJnsPerawatan model.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_jenis_prw)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_jenis_prw),
        ]);
    }

    /**
     * Creates a new MatrikAkunJnsPerawatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MatrikAkunJnsPerawatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_jenis_prw' => $model->kd_jenis_prw]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MatrikAkunJnsPerawatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_jenis_prw)
    {
        $model = $this->findModel($kd_jenis_prw);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_jenis_prw' => $model->kd_jenis_prw]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MatrikAkunJnsPerawatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_jenis_prw)
    {
        $this->findModel($kd_jenis_prw)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MatrikAkunJnsPerawatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @return MatrikAkunJnsPerawatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_jenis_prw)
    {
        if (($model = MatrikAkunJnsPerawatan::findOne(['kd_jenis_prw' => $kd_jenis_prw])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
