<?php

namespace frontend\controllers;

use frontend\models\Jadwal;
use frontend\models\JadwalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JadwalController implements the CRUD actions for Jadwal model.
 */
class JadwalController extends Controller
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
     * Lists all Jadwal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JadwalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jadwal model.
     * @param string $kd_dokter Kd Dokter
     * @param string $hari_kerja Hari Kerja
     * @param string $jam_mulai Jam Mulai
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_dokter, $hari_kerja, $jam_mulai)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_dokter, $hari_kerja, $jam_mulai),
        ]);
    }

    /**
     * Creates a new Jadwal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jadwal();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_dokter' => $model->kd_dokter, 'hari_kerja' => $model->hari_kerja, 'jam_mulai' => $model->jam_mulai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jadwal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_dokter Kd Dokter
     * @param string $hari_kerja Hari Kerja
     * @param string $jam_mulai Jam Mulai
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_dokter, $hari_kerja, $jam_mulai)
    {
        $model = $this->findModel($kd_dokter, $hari_kerja, $jam_mulai);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_dokter' => $model->kd_dokter, 'hari_kerja' => $model->hari_kerja, 'jam_mulai' => $model->jam_mulai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jadwal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_dokter Kd Dokter
     * @param string $hari_kerja Hari Kerja
     * @param string $jam_mulai Jam Mulai
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_dokter, $hari_kerja, $jam_mulai)
    {
        $this->findModel($kd_dokter, $hari_kerja, $jam_mulai)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jadwal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_dokter Kd Dokter
     * @param string $hari_kerja Hari Kerja
     * @param string $jam_mulai Jam Mulai
     * @return Jadwal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_dokter, $hari_kerja, $jam_mulai)
    {
        if (($model = Jadwal::findOne(['kd_dokter' => $kd_dokter, 'hari_kerja' => $hari_kerja, 'jam_mulai' => $jam_mulai])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
