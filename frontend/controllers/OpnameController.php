<?php

namespace frontend\controllers;

use frontend\models\Opname;
use frontend\models\OpnameSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OpnameController implements the CRUD actions for Opname model.
 */
class OpnameController extends Controller
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
     * Lists all Opname models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new OpnameSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Opname model.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $kd_bangsal Kd Bangsal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng, $tanggal, $kd_bangsal, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng, $tanggal, $kd_bangsal, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new Opname model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Opname();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'kd_bangsal' => $model->kd_bangsal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Opname model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $kd_bangsal Kd Bangsal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng, $tanggal, $kd_bangsal, $no_batch, $no_faktur)
    {
        $model = $this->findModel($kode_brng, $tanggal, $kd_bangsal, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'kd_bangsal' => $model->kd_bangsal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Opname model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $kd_bangsal Kd Bangsal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng, $tanggal, $kd_bangsal, $no_batch, $no_faktur)
    {
        $this->findModel($kode_brng, $tanggal, $kd_bangsal, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Opname model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $kd_bangsal Kd Bangsal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return Opname the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng, $tanggal, $kd_bangsal, $no_batch, $no_faktur)
    {
        if (($model = Opname::findOne(['kode_brng' => $kode_brng, 'tanggal' => $tanggal, 'kd_bangsal' => $kd_bangsal, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
