<?php

namespace frontend\controllers;

use frontend\models\Mutasibarang;
use frontend\models\MutasibarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MutasibarangController implements the CRUD actions for Mutasibarang model.
 */
class MutasibarangController extends Controller
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
     * Lists all Mutasibarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MutasibarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mutasibarang model.
     * @param string $kode_brng Kode Brng
     * @param string $kd_bangsaldari Kd Bangsaldari
     * @param string $kd_bangsalke Kd Bangsalke
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng, $kd_bangsaldari, $kd_bangsalke, $tanggal, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng, $kd_bangsaldari, $kd_bangsalke, $tanggal, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new Mutasibarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Mutasibarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'kd_bangsaldari' => $model->kd_bangsaldari, 'kd_bangsalke' => $model->kd_bangsalke, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mutasibarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng Kode Brng
     * @param string $kd_bangsaldari Kd Bangsaldari
     * @param string $kd_bangsalke Kd Bangsalke
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng, $kd_bangsaldari, $kd_bangsalke, $tanggal, $no_batch, $no_faktur)
    {
        $model = $this->findModel($kode_brng, $kd_bangsaldari, $kd_bangsalke, $tanggal, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'kd_bangsaldari' => $model->kd_bangsaldari, 'kd_bangsalke' => $model->kd_bangsalke, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mutasibarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng Kode Brng
     * @param string $kd_bangsaldari Kd Bangsaldari
     * @param string $kd_bangsalke Kd Bangsalke
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng, $kd_bangsaldari, $kd_bangsalke, $tanggal, $no_batch, $no_faktur)
    {
        $this->findModel($kode_brng, $kd_bangsaldari, $kd_bangsalke, $tanggal, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mutasibarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng Kode Brng
     * @param string $kd_bangsaldari Kd Bangsaldari
     * @param string $kd_bangsalke Kd Bangsalke
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return Mutasibarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng, $kd_bangsaldari, $kd_bangsalke, $tanggal, $no_batch, $no_faktur)
    {
        if (($model = Mutasibarang::findOne(['kode_brng' => $kode_brng, 'kd_bangsaldari' => $kd_bangsaldari, 'kd_bangsalke' => $kd_bangsalke, 'tanggal' => $tanggal, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
