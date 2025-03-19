<?php

namespace frontend\controllers;

use frontend\models\UtdPenggunaanPenunjangPenyerahanDarah;
use frontend\models\UtdPenggunaanPenunjangPenyerahanDarahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdPenggunaanPenunjangPenyerahanDarahController implements the CRUD actions for UtdPenggunaanPenunjangPenyerahanDarah model.
 */
class UtdPenggunaanPenunjangPenyerahanDarahController extends Controller
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
     * Lists all UtdPenggunaanPenunjangPenyerahanDarah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdPenggunaanPenunjangPenyerahanDarahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdPenggunaanPenunjangPenyerahanDarah model.
     * @param string $no_penyerahan No Penyerahan
     * @param string $kode_brng Kode Brng
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_penyerahan, $kode_brng)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_penyerahan, $kode_brng),
        ]);
    }

    /**
     * Creates a new UtdPenggunaanPenunjangPenyerahanDarah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdPenggunaanPenunjangPenyerahanDarah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_penyerahan' => $model->no_penyerahan, 'kode_brng' => $model->kode_brng]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdPenggunaanPenunjangPenyerahanDarah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_penyerahan No Penyerahan
     * @param string $kode_brng Kode Brng
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_penyerahan, $kode_brng)
    {
        $model = $this->findModel($no_penyerahan, $kode_brng);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_penyerahan' => $model->no_penyerahan, 'kode_brng' => $model->kode_brng]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdPenggunaanPenunjangPenyerahanDarah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_penyerahan No Penyerahan
     * @param string $kode_brng Kode Brng
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_penyerahan, $kode_brng)
    {
        $this->findModel($no_penyerahan, $kode_brng)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdPenggunaanPenunjangPenyerahanDarah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_penyerahan No Penyerahan
     * @param string $kode_brng Kode Brng
     * @return UtdPenggunaanPenunjangPenyerahanDarah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_penyerahan, $kode_brng)
    {
        if (($model = UtdPenggunaanPenunjangPenyerahanDarah::findOne(['no_penyerahan' => $no_penyerahan, 'kode_brng' => $kode_brng])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
