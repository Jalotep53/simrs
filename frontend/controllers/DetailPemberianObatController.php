<?php

namespace frontend\controllers;

use frontend\models\DetailPemberianObat;
use frontend\models\DetailPemberianObatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailPemberianObatController implements the CRUD actions for DetailPemberianObat model.
 */
class DetailPemberianObatController extends Controller
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
     * Lists all DetailPemberianObat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DetailPemberianObatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailPemberianObat model.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tgl_perawatan, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($tgl_perawatan, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new DetailPemberianObat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailPemberianObat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailPemberianObat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tgl_perawatan, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        $model = $this->findModel($tgl_perawatan, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailPemberianObat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tgl_perawatan, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        $this->findModel($tgl_perawatan, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailPemberianObat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam Jam
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return DetailPemberianObat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tgl_perawatan, $jam, $no_rawat, $kode_brng, $no_batch, $no_faktur)
    {
        if (($model = DetailPemberianObat::findOne(['tgl_perawatan' => $tgl_perawatan, 'jam' => $jam, 'no_rawat' => $no_rawat, 'kode_brng' => $kode_brng, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
