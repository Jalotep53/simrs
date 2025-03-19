<?php

namespace frontend\controllers;

use frontend\models\BayarDetailPeriksaLab;
use frontend\models\BayarDetailPeriksaLabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BayarDetailPeriksaLabController implements the CRUD actions for BayarDetailPeriksaLab model.
 */
class BayarDetailPeriksaLabController extends Controller
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
     * Lists all BayarDetailPeriksaLab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BayarDetailPeriksaLabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BayarDetailPeriksaLab model.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param int $id_template Id Template
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam, $id_template)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam, $id_template),
        ]);
    }

    /**
     * Creates a new BayarDetailPeriksaLab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BayarDetailPeriksaLab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'id_template' => $model->id_template]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BayarDetailPeriksaLab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param int $id_template Id Template
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam, $id_template)
    {
        $model = $this->findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam, $id_template);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_bayar' => $model->no_bayar, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'id_template' => $model->id_template]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BayarDetailPeriksaLab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param int $id_template Id Template
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam, $id_template)
    {
        $this->findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam, $id_template)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BayarDetailPeriksaLab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_bayar No Bayar
     * @param string $no_rawat No Rawat
     * @param string $kd_jenis_prw Kd Jenis Prw
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @param int $id_template Id Template
     * @return BayarDetailPeriksaLab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_bayar, $no_rawat, $kd_jenis_prw, $tgl_periksa, $jam, $id_template)
    {
        if (($model = BayarDetailPeriksaLab::findOne(['no_bayar' => $no_bayar, 'no_rawat' => $no_rawat, 'kd_jenis_prw' => $kd_jenis_prw, 'tgl_periksa' => $tgl_periksa, 'jam' => $jam, 'id_template' => $id_template])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
