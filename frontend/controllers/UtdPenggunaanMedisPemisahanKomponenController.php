<?php

namespace frontend\controllers;

use frontend\models\UtdPenggunaanMedisPemisahanKomponen;
use frontend\models\UtdPenggunaanMedisPemisahanKomponenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdPenggunaanMedisPemisahanKomponenController implements the CRUD actions for UtdPenggunaanMedisPemisahanKomponen model.
 */
class UtdPenggunaanMedisPemisahanKomponenController extends Controller
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
     * Lists all UtdPenggunaanMedisPemisahanKomponen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdPenggunaanMedisPemisahanKomponenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdPenggunaanMedisPemisahanKomponen model.
     * @param string $no_donor No Donor
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_donor, $kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_donor, $kode_brng),
        ]);
    }

    /**
     * Creates a new UtdPenggunaanMedisPemisahanKomponen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdPenggunaanMedisPemisahanKomponen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_donor' => $model->no_donor, 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdPenggunaanMedisPemisahanKomponen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_donor No Donor
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_donor, $kode_brng)
    {
        $model = $this->findModel($no_donor, $kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_donor' => $model->no_donor, 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdPenggunaanMedisPemisahanKomponen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_donor No Donor
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_donor, $kode_brng)
    {
        $this->findModel($no_donor, $kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdPenggunaanMedisPemisahanKomponen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_donor No Donor
     * @param string $kode_brng Kode Brng
     * @return UtdPenggunaanMedisPemisahanKomponen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_donor, $kode_brng)
    {
        if (($model = UtdPenggunaanMedisPemisahanKomponen::findOne(['no_donor' => $no_donor, 'kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
