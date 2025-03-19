<?php

namespace frontend\controllers;

use frontend\models\StokObatPasien;
use frontend\models\StokObatPasienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StokObatPasienController implements the CRUD actions for StokObatPasien model.
 */
class StokObatPasienController extends Controller
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
     * Lists all StokObatPasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new StokObatPasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StokObatPasien model.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new StokObatPasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new StokObatPasien();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StokObatPasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        $model = $this->findModel($tanggal, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StokObatPasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        $this->findModel($tanggal, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StokObatPasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return StokObatPasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        if (($model = StokObatPasien::findOne(['tanggal' => $tanggal, 'jam' => $jam, 'no_rawat' => $no_rawat, 'kode_brng' => $kode_brng, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
