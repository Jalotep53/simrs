<?php

namespace frontend\controllers;

use frontend\models\UtdPenyerahanDarahDetail;
use frontend\models\UtdPenyerahanDarahDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdPenyerahanDarahDetailController implements the CRUD actions for UtdPenyerahanDarahDetail model.
 */
class UtdPenyerahanDarahDetailController extends Controller
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
     * Lists all UtdPenyerahanDarahDetail models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdPenyerahanDarahDetailSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdPenyerahanDarahDetail model.
     * @param string $no_penyerahan No Penyerahan
     * @param string $no_kantong No Kantong
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_penyerahan, $no_kantong)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_penyerahan, $no_kantong),
        ]);
    }

    /**
     * Creates a new UtdPenyerahanDarahDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdPenyerahanDarahDetail();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_penyerahan' => $model->no_penyerahan, 'no_kantong' => $model->no_kantong]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdPenyerahanDarahDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_penyerahan No Penyerahan
     * @param string $no_kantong No Kantong
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_penyerahan, $no_kantong)
    {
        $model = $this->findModel($no_penyerahan, $no_kantong);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_penyerahan' => $model->no_penyerahan, 'no_kantong' => $model->no_kantong]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdPenyerahanDarahDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_penyerahan No Penyerahan
     * @param string $no_kantong No Kantong
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_penyerahan, $no_kantong)
    {
        $this->findModel($no_penyerahan, $no_kantong)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdPenyerahanDarahDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_penyerahan No Penyerahan
     * @param string $no_kantong No Kantong
     * @return UtdPenyerahanDarahDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_penyerahan, $no_kantong)
    {
        if (($model = UtdPenyerahanDarahDetail::findOne(['no_penyerahan' => $no_penyerahan, 'no_kantong' => $no_kantong])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
