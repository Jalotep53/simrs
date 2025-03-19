<?php

namespace frontend\controllers;

use frontend\models\InacbgGroupingStage1Internal;
use frontend\models\InacbgGroupingStage1InternalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InacbgGroupingStage1InternalController implements the CRUD actions for InacbgGroupingStage1Internal model.
 */
class InacbgGroupingStage1InternalController extends Controller
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
     * Lists all InacbgGroupingStage1Internal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InacbgGroupingStage1InternalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InacbgGroupingStage1Internal model.
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
     * Creates a new InacbgGroupingStage1Internal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InacbgGroupingStage1Internal();

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
     * Updates an existing InacbgGroupingStage1Internal model.
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
     * Deletes an existing InacbgGroupingStage1Internal model.
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
     * Finds the InacbgGroupingStage1Internal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_sep No Sep
     * @return InacbgGroupingStage1Internal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_sep)
    {
        if (($model = InacbgGroupingStage1Internal::findOne(['no_sep' => $no_sep])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
