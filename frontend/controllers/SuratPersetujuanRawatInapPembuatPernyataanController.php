<?php

namespace frontend\controllers;

use frontend\models\SuratPersetujuanRawatInapPembuatPernyataan;
use frontend\models\SuratPersetujuanRawatInapPembuatPernyataanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratPersetujuanRawatInapPembuatPernyataanController implements the CRUD actions for SuratPersetujuanRawatInapPembuatPernyataan model.
 */
class SuratPersetujuanRawatInapPembuatPernyataanController extends Controller
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
     * Lists all SuratPersetujuanRawatInapPembuatPernyataan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratPersetujuanRawatInapPembuatPernyataanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratPersetujuanRawatInapPembuatPernyataan model.
     * @param string $no_surat No Surat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_surat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_surat),
        ]);
    }

    /**
     * Creates a new SuratPersetujuanRawatInapPembuatPernyataan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratPersetujuanRawatInapPembuatPernyataan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_surat' => $model->no_surat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratPersetujuanRawatInapPembuatPernyataan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_surat No Surat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_surat)
    {
        $model = $this->findModel($no_surat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_surat' => $model->no_surat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratPersetujuanRawatInapPembuatPernyataan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_surat No Surat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_surat)
    {
        $this->findModel($no_surat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratPersetujuanRawatInapPembuatPernyataan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_surat No Surat
     * @return SuratPersetujuanRawatInapPembuatPernyataan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_surat)
    {
        if (($model = SuratPersetujuanRawatInapPembuatPernyataan::findOne(['no_surat' => $no_surat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
