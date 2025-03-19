<?php

namespace frontend\controllers;

use frontend\models\DataKlasifikasiPasienRanap;
use frontend\models\DataKlasifikasiPasienRanapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataKlasifikasiPasienRanapController implements the CRUD actions for DataKlasifikasiPasienRanap model.
 */
class DataKlasifikasiPasienRanapController extends Controller
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
     * Lists all DataKlasifikasiPasienRanap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataKlasifikasiPasienRanapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataKlasifikasiPasienRanap model.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $no_rawat)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $no_rawat),
        ]);
    }

    /**
     * Creates a new DataKlasifikasiPasienRanap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataKlasifikasiPasienRanap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataKlasifikasiPasienRanap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $no_rawat)
    {
        $model = $this->findModel($tanggal, $no_rawat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataKlasifikasiPasienRanap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $no_rawat)
    {
        $this->findModel($tanggal, $no_rawat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataKlasifikasiPasienRanap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @return DataKlasifikasiPasienRanap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $no_rawat)
    {
        if (($model = DataKlasifikasiPasienRanap::findOne(['tanggal' => $tanggal, 'no_rawat' => $no_rawat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
