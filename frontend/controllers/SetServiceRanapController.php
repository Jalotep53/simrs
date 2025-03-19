<?php

namespace frontend\controllers;

use frontend\models\SetServiceRanap;
use frontend\models\SetServiceRanapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetServiceRanapController implements the CRUD actions for SetServiceRanap model.
 */
class SetServiceRanapController extends Controller
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
     * Lists all SetServiceRanap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetServiceRanapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetServiceRanap model.
     * @param string $nama_service Nama Service
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nama_service)
    {
        return $this->render('view', [
            'model' => $this->findModel($nama_service),
        ]);
    }

    /**
     * Creates a new SetServiceRanap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetServiceRanap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nama_service' => $model->nama_service]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetServiceRanap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nama_service Nama Service
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nama_service)
    {
        $model = $this->findModel($nama_service);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nama_service' => $model->nama_service]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetServiceRanap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nama_service Nama Service
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nama_service)
    {
        $this->findModel($nama_service)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetServiceRanap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nama_service Nama Service
     * @return SetServiceRanap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nama_service)
    {
        if (($model = SetServiceRanap::findOne(['nama_service' => $nama_service])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
