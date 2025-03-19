<?php

namespace frontend\controllers;

use frontend\models\SaranKesanLab;
use frontend\models\SaranKesanLabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SaranKesanLabController implements the CRUD actions for SaranKesanLab model.
 */
class SaranKesanLabController extends Controller
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
     * Lists all SaranKesanLab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SaranKesanLabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SaranKesanLab model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_periksa, $jam)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_periksa, $jam),
        ]);
    }

    /**
     * Creates a new SaranKesanLab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SaranKesanLab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SaranKesanLab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_periksa, $jam)
    {
        $model = $this->findModel($no_rawat, $tgl_periksa, $jam);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SaranKesanLab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_periksa, $jam)
    {
        $this->findModel($no_rawat, $tgl_periksa, $jam)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SaranKesanLab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_periksa Tgl Periksa
     * @param string $jam Jam
     * @return SaranKesanLab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_periksa, $jam)
    {
        if (($model = SaranKesanLab::findOne(['no_rawat' => $no_rawat, 'tgl_periksa' => $tgl_periksa, 'jam' => $jam])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
