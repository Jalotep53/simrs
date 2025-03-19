<?php

namespace frontend\controllers;

use frontend\models\SetLemburhr;
use frontend\models\SetLemburhrSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetLemburhrController implements the CRUD actions for SetLemburhr model.
 */
class SetLemburhrController extends Controller
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
     * Lists all SetLemburhr models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetLemburhrSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetLemburhr model.
     * @param float $tnj Tnj
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tnj)
    {
        return $this->render('view', [
            'model' => $this->findModel($tnj),
        ]);
    }

    /**
     * Creates a new SetLemburhr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetLemburhr();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tnj' => $model->tnj]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetLemburhr model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param float $tnj Tnj
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tnj)
    {
        $model = $this->findModel($tnj);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tnj' => $model->tnj]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetLemburhr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param float $tnj Tnj
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tnj)
    {
        $this->findModel($tnj)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetLemburhr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param float $tnj Tnj
     * @return SetLemburhr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tnj)
    {
        if (($model = SetLemburhr::findOne(['tnj' => $tnj])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
