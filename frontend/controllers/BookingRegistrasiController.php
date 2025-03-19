<?php

namespace frontend\controllers;

use frontend\models\BookingRegistrasi;
use frontend\models\BookingRegistrasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookingRegistrasiController implements the CRUD actions for BookingRegistrasi model.
 */
class BookingRegistrasiController extends Controller
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
     * Lists all BookingRegistrasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BookingRegistrasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookingRegistrasi model.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tanggal_periksa Tanggal Periksa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rkm_medis, $tanggal_periksa)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rkm_medis, $tanggal_periksa),
        ]);
    }

    /**
     * Creates a new BookingRegistrasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BookingRegistrasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'tanggal_periksa' => $model->tanggal_periksa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BookingRegistrasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tanggal_periksa Tanggal Periksa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rkm_medis, $tanggal_periksa)
    {
        $model = $this->findModel($no_rkm_medis, $tanggal_periksa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'tanggal_periksa' => $model->tanggal_periksa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BookingRegistrasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tanggal_periksa Tanggal Periksa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rkm_medis, $tanggal_periksa)
    {
        $this->findModel($no_rkm_medis, $tanggal_periksa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BookingRegistrasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $tanggal_periksa Tanggal Periksa
     * @return BookingRegistrasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rkm_medis, $tanggal_periksa)
    {
        if (($model = BookingRegistrasi::findOne(['no_rkm_medis' => $no_rkm_medis, 'tanggal_periksa' => $tanggal_periksa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
