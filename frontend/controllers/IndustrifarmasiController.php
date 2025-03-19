<?php

namespace frontend\controllers;

use frontend\models\Industrifarmasi;
use frontend\models\IndustrifarmasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IndustrifarmasiController implements the CRUD actions for Industrifarmasi model.
 */
class IndustrifarmasiController extends Controller
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
     * Lists all Industrifarmasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IndustrifarmasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Industrifarmasi model.
     * @param string $kode_industri Kode Industri
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_industri)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_industri),
        ]);
    }

    /**
     * Creates a new Industrifarmasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Industrifarmasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_industri' => $model->kode_industri]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Industrifarmasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_industri Kode Industri
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_industri)
    {
        $model = $this->findModel($kode_industri);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_industri' => $model->kode_industri]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Industrifarmasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_industri Kode Industri
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_industri)
    {
        $this->findModel($kode_industri)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Industrifarmasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_industri Kode Industri
     * @return Industrifarmasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_industri)
    {
        if (($model = Industrifarmasi::findOne(['kode_industri' => $kode_industri])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
