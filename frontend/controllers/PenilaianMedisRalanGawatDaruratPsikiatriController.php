<?php

namespace frontend\controllers;

use frontend\models\PenilaianMedisRalanGawatDaruratPsikiatri;
use frontend\models\PenilaianMedisRalanGawatDaruratPsikiatriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenilaianMedisRalanGawatDaruratPsikiatriController implements the CRUD actions for PenilaianMedisRalanGawatDaruratPsikiatri model.
 */
class PenilaianMedisRalanGawatDaruratPsikiatriController extends Controller
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
     * Lists all PenilaianMedisRalanGawatDaruratPsikiatri models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenilaianMedisRalanGawatDaruratPsikiatriSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenilaianMedisRalanGawatDaruratPsikiatri model.
     * @param string $no_rawat No Rawat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rawat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rawat),
        ]);
    }

    /**
     * Creates a new PenilaianMedisRalanGawatDaruratPsikiatri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenilaianMedisRalanGawatDaruratPsikiatri();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rawat' => $model->no_rawat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PenilaianMedisRalanGawatDaruratPsikiatri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rawat No Rawat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rawat)
    {
        $model = $this->findModel($no_rawat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rawat' => $model->no_rawat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenilaianMedisRalanGawatDaruratPsikiatri model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rawat No Rawat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rawat)
    {
        $this->findModel($no_rawat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenilaianMedisRalanGawatDaruratPsikiatri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rawat No Rawat
     * @return PenilaianMedisRalanGawatDaruratPsikiatri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rawat)
    {
        if (($model = PenilaianMedisRalanGawatDaruratPsikiatri::findOne(['no_rawat' => $no_rawat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
