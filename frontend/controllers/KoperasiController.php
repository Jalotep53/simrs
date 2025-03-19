<?php

namespace frontend\controllers;

use frontend\models\Koperasi;
use frontend\models\KoperasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KoperasiController implements the CRUD actions for Koperasi model.
 */
class KoperasiController extends Controller
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
     * Lists all Koperasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KoperasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Koperasi model.
     * @param string $stts Stts
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($stts)
    {
        return $this->render('view', [
            'model' => $this->findModel($stts),
        ]);
    }

    /**
     * Creates a new Koperasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Koperasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'stts' => $model->stts]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Koperasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $stts Stts
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($stts)
    {
        $model = $this->findModel($stts);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stts' => $model->stts]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Koperasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $stts Stts
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($stts)
    {
        $this->findModel($stts)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Koperasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $stts Stts
     * @return Koperasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stts)
    {
        if (($model = Koperasi::findOne(['stts' => $stts])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
