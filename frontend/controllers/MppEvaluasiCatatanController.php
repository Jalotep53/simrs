<?php

namespace frontend\controllers;

use frontend\models\MppEvaluasiCatatan;
use frontend\models\MppEvaluasiCatatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MppEvaluasiCatatanController implements the CRUD actions for MppEvaluasiCatatan model.
 */
class MppEvaluasiCatatanController extends Controller
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
     * Lists all MppEvaluasiCatatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MppEvaluasiCatatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MppEvaluasiCatatan model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_implementasi Tgl Implementasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_implementasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_implementasi),
        ]);
    }

    /**
     * Creates a new MppEvaluasiCatatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MppEvaluasiCatatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_implementasi' => $model->tgl_implementasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MppEvaluasiCatatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_implementasi Tgl Implementasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_implementasi)
    {
        $model = $this->findModel($no_rawat, $tgl_implementasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_implementasi' => $model->tgl_implementasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MppEvaluasiCatatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_implementasi Tgl Implementasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_implementasi)
    {
        $this->findModel($no_rawat, $tgl_implementasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MppEvaluasiCatatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_implementasi Tgl Implementasi
     * @return MppEvaluasiCatatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_implementasi)
    {
        if (($model = MppEvaluasiCatatan::findOne(['no_rawat' => $no_rawat, 'tgl_implementasi' => $tgl_implementasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
