<?php

namespace frontend\controllers;

use frontend\models\KelompokJabatan;
use frontend\models\KelompokJabatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KelompokJabatanController implements the CRUD actions for KelompokJabatan model.
 */
class KelompokJabatanController extends Controller
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
     * Lists all KelompokJabatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KelompokJabatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KelompokJabatan model.
     * @param string $kode_kelompok Kode Kelompok
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_kelompok)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_kelompok),
        ]);
    }

    /**
     * Creates a new KelompokJabatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KelompokJabatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_kelompok' => $model->kode_kelompok]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KelompokJabatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_kelompok Kode Kelompok
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_kelompok)
    {
        $model = $this->findModel($kode_kelompok);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_kelompok' => $model->kode_kelompok]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KelompokJabatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_kelompok Kode Kelompok
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_kelompok)
    {
        $this->findModel($kode_kelompok)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KelompokJabatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_kelompok Kode Kelompok
     * @return KelompokJabatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_kelompok)
    {
        if (($model = KelompokJabatan::findOne(['kode_kelompok' => $kode_kelompok])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
