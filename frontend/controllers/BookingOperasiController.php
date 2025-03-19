<?php

namespace frontend\controllers;

use frontend\models\BookingOperasi;
use frontend\models\BookingOperasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookingOperasiController implements the CRUD actions for BookingOperasi model.
 */
class BookingOperasiController extends Controller
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
     * Lists all BookingOperasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BookingOperasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookingOperasi model.
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tanggal Tanggal
     * @param string $jam_mulai Jam Mulai
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kode_paket, $tanggal, $jam_mulai)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kode_paket, $tanggal, $jam_mulai),
        ]);
    }

    /**
     * Creates a new BookingOperasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BookingOperasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tanggal' => $model->tanggal, 'jam_mulai' => $model->jam_mulai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BookingOperasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tanggal Tanggal
     * @param string $jam_mulai Jam Mulai
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kode_paket, $tanggal, $jam_mulai)
    {
        $model = $this->findModel($no_rawat, $kode_paket, $tanggal, $jam_mulai);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_paket' => $model->kode_paket, 'tanggal' => $model->tanggal, 'jam_mulai' => $model->jam_mulai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BookingOperasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tanggal Tanggal
     * @param string $jam_mulai Jam Mulai
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kode_paket, $tanggal, $jam_mulai)
    {
        $this->findModel($no_rawat, $kode_paket, $tanggal, $jam_mulai)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BookingOperasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kode_paket Kode Paket
     * @param string $tanggal Tanggal
     * @param string $jam_mulai Jam Mulai
     * @return BookingOperasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kode_paket, $tanggal, $jam_mulai)
    {
        if (($model = BookingOperasi::findOne(['no_rawat' => $no_rawat, 'kode_paket' => $kode_paket, 'tanggal' => $tanggal, 'jam_mulai' => $jam_mulai])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
