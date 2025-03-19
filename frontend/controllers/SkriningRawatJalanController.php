<?php

namespace frontend\controllers;

use frontend\models\SkriningRawatJalan;
use frontend\models\SkriningRawatJalanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkriningRawatJalanController implements the CRUD actions for SkriningRawatJalan model.
 */
class SkriningRawatJalanController extends Controller
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
     * Lists all SkriningRawatJalan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SkriningRawatJalanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkriningRawatJalan model.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rkm_medis No Rkm Medis
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $jam, $no_rkm_medis)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $jam, $no_rkm_medis),
        ]);
    }

    /**
     * Creates a new SkriningRawatJalan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SkriningRawatJalan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rkm_medis' => $model->no_rkm_medis]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkriningRawatJalan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rkm_medis No Rkm Medis
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $jam, $no_rkm_medis)
    {
        $model = $this->findModel($tanggal, $jam, $no_rkm_medis);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rkm_medis' => $model->no_rkm_medis]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkriningRawatJalan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rkm_medis No Rkm Medis
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $jam, $no_rkm_medis)
    {
        $this->findModel($tanggal, $jam, $no_rkm_medis)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SkriningRawatJalan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $jam Jam
     * @param string $no_rkm_medis No Rkm Medis
     * @return SkriningRawatJalan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $jam, $no_rkm_medis)
    {
        if (($model = SkriningRawatJalan::findOne(['tanggal' => $tanggal, 'jam' => $jam, 'no_rkm_medis' => $no_rkm_medis])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
