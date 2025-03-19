<?php

namespace frontend\controllers;

use frontend\models\PerusahaanPasien;
use frontend\models\PerusahaanPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerusahaanPasienController implements the CRUD actions for PerusahaanPasien model.
 */
class PerusahaanPasienController extends Controller
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
     * Lists all PerusahaanPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerusahaanPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerusahaanPasien model.
     * @param string $kode_perusahaan Kode Perusahaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_perusahaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_perusahaan),
        ]);
    }

    /**
     * Creates a new PerusahaanPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerusahaanPasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_perusahaan' => $model->kode_perusahaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerusahaanPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_perusahaan Kode Perusahaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_perusahaan)
    {
        $model = $this->findModel($kode_perusahaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_perusahaan' => $model->kode_perusahaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerusahaanPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_perusahaan Kode Perusahaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_perusahaan)
    {
        $this->findModel($kode_perusahaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerusahaanPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_perusahaan Kode Perusahaan
     * @return PerusahaanPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_perusahaan)
    {
        if (($model = PerusahaanPasien::findOne(['kode_perusahaan' => $kode_perusahaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
