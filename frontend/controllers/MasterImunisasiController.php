<?php

namespace frontend\controllers;

use frontend\models\MasterImunisasi;
use frontend\models\MasterImunisasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterImunisasiController implements the CRUD actions for MasterImunisasi model.
 */
class MasterImunisasiController extends Controller
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
     * Lists all MasterImunisasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterImunisasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterImunisasi model.
     * @param string $kode_imunisasi Kode Imunisasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_imunisasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_imunisasi),
        ]);
    }

    /**
     * Creates a new MasterImunisasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterImunisasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_imunisasi' => $model->kode_imunisasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterImunisasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_imunisasi Kode Imunisasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_imunisasi)
    {
        $model = $this->findModel($kode_imunisasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_imunisasi' => $model->kode_imunisasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterImunisasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_imunisasi Kode Imunisasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_imunisasi)
    {
        $this->findModel($kode_imunisasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterImunisasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_imunisasi Kode Imunisasi
     * @return MasterImunisasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_imunisasi)
    {
        if (($model = MasterImunisasi::findOne(['kode_imunisasi' => $kode_imunisasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
