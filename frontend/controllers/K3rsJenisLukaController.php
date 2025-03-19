<?php

namespace frontend\controllers;

use frontend\models\K3rsJenisLuka;
use frontend\models\K3rsJenisLukaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsJenisLukaController implements the CRUD actions for K3rsJenisLuka model.
 */
class K3rsJenisLukaController extends Controller
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
     * Lists all K3rsJenisLuka models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsJenisLukaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsJenisLuka model.
     * @param string $kode_luka Kode Luka
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_luka)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_luka),
        ]);
    }

    /**
     * Creates a new K3rsJenisLuka model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsJenisLuka();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_luka' => $model->kode_luka]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsJenisLuka model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_luka Kode Luka
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_luka)
    {
        $model = $this->findModel($kode_luka);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_luka' => $model->kode_luka]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsJenisLuka model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_luka Kode Luka
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_luka)
    {
        $this->findModel($kode_luka)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsJenisLuka model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_luka Kode Luka
     * @return K3rsJenisLuka the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_luka)
    {
        if (($model = K3rsJenisLuka::findOne(['kode_luka' => $kode_luka])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
