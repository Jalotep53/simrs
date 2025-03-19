<?php

namespace frontend\controllers;

use frontend\models\ResepPulang;
use frontend\models\ResepPulangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResepPulangController implements the CRUD actions for ResepPulang model.
 */
class ResepPulangController extends Controller
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
     * Lists all ResepPulang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ResepPulangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResepPulang model.
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kode_brng, $tanggal, $jam, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kode_brng, $tanggal, $jam, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new ResepPulang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ResepPulang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ResepPulang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kode_brng, $tanggal, $jam, $no_batch, $no_faktur)
    {
        $model = $this->findModel($no_rawat, $kode_brng, $tanggal, $jam, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResepPulang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kode_brng, $tanggal, $jam, $no_batch, $no_faktur)
    {
        $this->findModel($no_rawat, $kode_brng, $tanggal, $jam, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResepPulang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return ResepPulang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kode_brng, $tanggal, $jam, $no_batch, $no_faktur)
    {
        if (($model = ResepPulang::findOne(['no_rawat' => $no_rawat, 'kode_brng' => $kode_brng, 'tanggal' => $tanggal, 'jam' => $jam, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
