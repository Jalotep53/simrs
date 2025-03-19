<?php

namespace frontend\controllers;

use frontend\models\CatatanObservasiRanapKebidanan;
use frontend\models\CatatanObservasiRanapKebidananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatatanObservasiRanapKebidananController implements the CRUD actions for CatatanObservasiRanapKebidanan model.
 */
class CatatanObservasiRanapKebidananController extends Controller
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
     * Lists all CatatanObservasiRanapKebidanan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CatatanObservasiRanapKebidananSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CatatanObservasiRanapKebidanan model.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $tgl_perawatan, $jam_rawat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $tgl_perawatan, $jam_rawat),
        ]);
    }

    /**
     * Creates a new CatatanObservasiRanapKebidanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CatatanObservasiRanapKebidanan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CatatanObservasiRanapKebidanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $tgl_perawatan, $jam_rawat)
    {
        $model = $this->findModel($no_rawat, $tgl_perawatan, $jam_rawat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CatatanObservasiRanapKebidanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $tgl_perawatan, $jam_rawat)
    {
        $this->findModel($no_rawat, $tgl_perawatan, $jam_rawat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CatatanObservasiRanapKebidanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $tgl_perawatan Tgl Perawatan
     * @param string $jam_rawat Jam Rawat
     * @return CatatanObservasiRanapKebidanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $tgl_perawatan, $jam_rawat)
    {
        if (($model = CatatanObservasiRanapKebidanan::findOne(['no_rawat' => $no_rawat, 'tgl_perawatan' => $tgl_perawatan, 'jam_rawat' => $jam_rawat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
