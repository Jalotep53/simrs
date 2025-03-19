<?php

namespace frontend\controllers;

use frontend\models\UtdPengambilanMedis;
use frontend\models\UtdPengambilanMedisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UtdPengambilanMedisController implements the CRUD actions for UtdPengambilanMedis model.
 */
class UtdPengambilanMedisController extends Controller
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
     * Lists all UtdPengambilanMedis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UtdPengambilanMedisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UtdPengambilanMedis model.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_brng, $tanggal, $no_batch, $no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_brng, $tanggal, $no_batch, $no_faktur),
        ]);
    }

    /**
     * Creates a new UtdPengambilanMedis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UtdPengambilanMedis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UtdPengambilanMedis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_brng, $tanggal, $no_batch, $no_faktur)
    {
        $model = $this->findModel($kode_brng, $tanggal, $no_batch, $no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UtdPengambilanMedis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_brng, $tanggal, $no_batch, $no_faktur)
    {
        $this->findModel($kode_brng, $tanggal, $no_batch, $no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UtdPengambilanMedis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_brng Kode Brng
     * @param string $tanggal Tanggal
     * @param string $no_batch No Batch
     * @param string $no_faktur No Faktur
     * @return UtdPengambilanMedis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_brng, $tanggal, $no_batch, $no_faktur)
    {
        if (($model = UtdPengambilanMedis::findOne(['kode_brng' => $kode_brng, 'tanggal' => $tanggal, 'no_batch' => $no_batch, 'no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
