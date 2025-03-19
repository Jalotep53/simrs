<?php

namespace frontend\controllers;

use frontend\models\DpjpRanap;
use frontend\models\DpjpRanapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DpjpRanapController implements the CRUD actions for DpjpRanap model.
 */
class DpjpRanapController extends Controller
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
     * Lists all DpjpRanap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DpjpRanapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DpjpRanap model.
     * @param string $no_rawat No Rawat
     * @param string $kd_dokter Kd Dokter
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat, $kd_dokter)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat, $kd_dokter),
        ]);
    }

    /**
     * Creates a new DpjpRanap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DpjpRanap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_dokter' => $model->kd_dokter]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DpjpRanap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_dokter Kd Dokter
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat, $kd_dokter)
    {
        $model = $this->findModel($no_rawat, $kd_dokter);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat, 'kd_dokter' => $model->kd_dokter]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DpjpRanap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @param string $kd_dokter Kd Dokter
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat, $kd_dokter)
    {
        $this->findModel($no_rawat, $kd_dokter)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DpjpRanap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @param string $kd_dokter Kd Dokter
     * @return DpjpRanap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat, $kd_dokter)
    {
        if (($model = DpjpRanap::findOne(['no_rawat' => $no_rawat, 'kd_dokter' => $kd_dokter])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
