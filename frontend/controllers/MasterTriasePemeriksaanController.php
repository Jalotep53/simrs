<?php

namespace frontend\controllers;

use frontend\models\MasterTriasePemeriksaan;
use frontend\models\MasterTriasePemeriksaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterTriasePemeriksaanController implements the CRUD actions for MasterTriasePemeriksaan model.
 */
class MasterTriasePemeriksaanController extends Controller
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
     * Lists all MasterTriasePemeriksaan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterTriasePemeriksaanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterTriasePemeriksaan model.
     * @param string $kode_pemeriksaan Kode Pemeriksaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_pemeriksaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_pemeriksaan),
        ]);
    }

    /**
     * Creates a new MasterTriasePemeriksaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterTriasePemeriksaan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_pemeriksaan' => $model->kode_pemeriksaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterTriasePemeriksaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_pemeriksaan Kode Pemeriksaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_pemeriksaan)
    {
        $model = $this->findModel($kode_pemeriksaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_pemeriksaan' => $model->kode_pemeriksaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterTriasePemeriksaan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_pemeriksaan Kode Pemeriksaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_pemeriksaan)
    {
        $this->findModel($kode_pemeriksaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterTriasePemeriksaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_pemeriksaan Kode Pemeriksaan
     * @return MasterTriasePemeriksaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_pemeriksaan)
    {
        if (($model = MasterTriasePemeriksaan::findOne(['kode_pemeriksaan' => $kode_pemeriksaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
