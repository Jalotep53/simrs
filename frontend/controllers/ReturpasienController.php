<?php

namespace frontend\controllers;

use frontend\models\Returpasien;
use frontend\models\ReturpasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReturpasienController implements the CRUD actions for Returpasien model.
 */
class ReturpasienController extends Controller
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
     * Lists all Returpasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReturpasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Returpasien model.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $no_rawat, $kode_brng, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new Returpasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Returpasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Returpasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        $model = $this->findModel($tanggal, $no_rawat, $kode_brng, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Returpasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        $this->findModel($tanggal, $no_rawat, $kode_brng, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Returpasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return Returpasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        if (($model = Returpasien::findOne(['tanggal' => $tanggal, 'no_rawat' => $no_rawat, 'kode_brng' => $kode_brng, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
