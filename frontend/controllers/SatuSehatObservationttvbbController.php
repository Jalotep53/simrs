<?php

namespace frontend\controllers;

use frontend\models\SatuSehatObservationttvbb;
use frontend\models\SatuSehatObservationttvbbSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatuSehatObservationttvbbController implements the CRUD actions for SatuSehatObservationttvbb model.
 */
class SatuSehatObservationttvbbController extends Controller
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
     * Lists all SatuSehatObservationttvbb models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatuSehatObservationttvbbSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SatuSehatObservationttvbb model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @param string $status Status
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_perawatan, $jam_rawat, $status)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_perawatan, $jam_rawat, $status),
        ]);
    }

    /**
     * Creates a new SatuSehatObservationttvbb model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SatuSehatObservationttvbb();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat, 'status' => $model->status]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SatuSehatObservationttvbb model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @param string $status Status
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_perawatan, $jam_rawat, $status)
    {
        $model = $this->findModel($no_rawat, $tgl_perawatan, $jam_rawat, $status);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat, 'status' => $model->status]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SatuSehatObservationttvbb model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @param string $status Status
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_perawatan, $jam_rawat, $status)
    {
        $this->findModel($no_rawat, $tgl_perawatan, $jam_rawat, $status)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SatuSehatObservationttvbb model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @param string $status Status
     * @return SatuSehatObservationttvbb the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_perawatan, $jam_rawat, $status)
    {
        if (($model = SatuSehatObservationttvbb::findOne(['no_rawat' => $no_rawat, 'tgl_perawatan' => $tgl_perawatan, 'jam_rawat' => $jam_rawat, 'status' => $status])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
