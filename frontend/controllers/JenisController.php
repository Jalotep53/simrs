<?php

namespace frontend\controllers;

use frontend\models\Jenis;
use frontend\models\JenisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JenisController implements the CRUD actions for Jenis model.
 */
class JenisController extends Controller
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
     * Lists all Jenis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JenisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jenis model.
     * @param string $kdjns Kdjns
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kdjns)
    {
        return $this->render('view', [
            'model' => $this->findModel($kdjns),
        ]);
    }

    /**
     * Creates a new Jenis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jenis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kdjns' => $model->kdjns]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jenis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kdjns Kdjns
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kdjns)
    {
        $model = $this->findModel($kdjns);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kdjns' => $model->kdjns]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jenis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kdjns Kdjns
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kdjns)
    {
        $this->findModel($kdjns)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jenis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kdjns Kdjns
     * @return Jenis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kdjns)
    {
        if (($model = Jenis::findOne(['kdjns' => $kdjns])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
