<?php

namespace frontend\controllers;

use frontend\models\InacbgGroupingStage12;
use frontend\models\InacbgGroupingStage12Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InacbgGroupingStage12Controller implements the CRUD actions for InacbgGroupingStage12 model.
 */
class InacbgGroupingStage12Controller extends Controller
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
     * Lists all InacbgGroupingStage12 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InacbgGroupingStage12Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InacbgGroupingStage12 model.
     * @param string $no_sep No Sep
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_sep)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_sep),
        ]);
    }

    /**
     * Creates a new InacbgGroupingStage12 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InacbgGroupingStage12();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_sep' => $model->no_sep]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InacbgGroupingStage12 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_sep No Sep
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_sep)
    {
        $model = $this->findModel($no_sep);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_sep' => $model->no_sep]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InacbgGroupingStage12 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_sep No Sep
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_sep)
    {
        $this->findModel($no_sep)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InacbgGroupingStage12 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_sep No Sep
     * @return InacbgGroupingStage12 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_sep)
    {
        if (($model = InacbgGroupingStage12::findOne(['no_sep' => $no_sep])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
