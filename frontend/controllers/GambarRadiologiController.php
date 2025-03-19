<?php

namespace frontend\controllers;

use frontend\models\GambarRadiologi;
use frontend\models\GambarRadiologiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GambarRadiologiController implements the CRUD actions for GambarRadiologi model.
 */
class GambarRadiologiController extends Controller
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
     * Lists all GambarRadiologi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new GambarRadiologiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GambarRadiologi model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param string $lokasi_gambar Lokasi Gambar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_periksa, $jam, $lokasi_gambar)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_periksa, $jam, $lokasi_gambar),
        ]);
    }

    /**
     * Creates a new GambarRadiologi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new GambarRadiologi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'lokasi_gambar' => $model->lokasi_gambar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GambarRadiologi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param string $lokasi_gambar Lokasi Gambar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_periksa, $jam, $lokasi_gambar)
    {
        $model = $this->findModel($no_rawat, $tgl_periksa, $jam, $lokasi_gambar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'lokasi_gambar' => $model->lokasi_gambar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GambarRadiologi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param string $lokasi_gambar Lokasi Gambar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_periksa, $jam, $lokasi_gambar)
    {
        $this->findModel($no_rawat, $tgl_periksa, $jam, $lokasi_gambar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GambarRadiologi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param string $lokasi_gambar Lokasi Gambar
     * @return GambarRadiologi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_periksa, $jam, $lokasi_gambar)
    {
        if (($model = GambarRadiologi::findOne(['no_rawat' => $no_rawat, 'tgl_periksa' => $tgl_periksa, 'jam' => $jam, 'lokasi_gambar' => $lokasi_gambar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
