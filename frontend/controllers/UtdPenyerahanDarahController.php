<?php

namespace frontend\controllers;

use frontend\models\UtdPenyerahanDarah;
use frontend\models\UtdPenyerahanDarahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdPenyerahanDarahController implements the CRUD actions for UtdPenyerahanDarah model.
 */
class UtdPenyerahanDarahController extends Controller
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
     * Lists all UtdPenyerahanDarah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdPenyerahanDarahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdPenyerahanDarah model.
     * @param string $no_penyerahan No Penyerahan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_penyerahan)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_penyerahan),
        ]);
    }

    /**
     * Creates a new UtdPenyerahanDarah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdPenyerahanDarah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_penyerahan' => $model->no_penyerahan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdPenyerahanDarah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_penyerahan No Penyerahan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_penyerahan)
    {
        $model = $this->findModel($no_penyerahan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_penyerahan' => $model->no_penyerahan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdPenyerahanDarah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_penyerahan No Penyerahan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_penyerahan)
    {
        $this->findModel($no_penyerahan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdPenyerahanDarah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_penyerahan No Penyerahan
     * @return UtdPenyerahanDarah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_penyerahan)
    {
        if (($model = UtdPenyerahanDarah::findOne(['no_penyerahan' => $no_penyerahan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
