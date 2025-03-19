<?php

namespace frontend\controllers;

use frontend\models\MasterMasalahKeperawatanMata;
use frontend\models\MasterMasalahKeperawatanMataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterMasalahKeperawatanMataController implements the CRUD actions for MasterMasalahKeperawatanMata model.
 */
class MasterMasalahKeperawatanMataController extends Controller
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
     * Lists all MasterMasalahKeperawatanMata models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterMasalahKeperawatanMataSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterMasalahKeperawatanMata model.
     * @param string $kode_masalah Kode Masalah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_masalah)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_masalah),
        ]);
    }

    /**
     * Creates a new MasterMasalahKeperawatanMata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterMasalahKeperawatanMata();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_masalah' => $model->kode_masalah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterMasalahKeperawatanMata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_masalah Kode Masalah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_masalah)
    {
        $model = $this->findModel($kode_masalah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_masalah' => $model->kode_masalah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterMasalahKeperawatanMata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_masalah Kode Masalah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_masalah)
    {
        $this->findModel($kode_masalah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterMasalahKeperawatanMata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_masalah Kode Masalah
     * @return MasterMasalahKeperawatanMata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_masalah)
    {
        if (($model = MasterMasalahKeperawatanMata::findOne(['kode_masalah' => $kode_masalah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
