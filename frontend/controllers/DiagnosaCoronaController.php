<?php

namespace frontend\controllers;

use frontend\models\DiagnosaCorona;
use frontend\models\DiagnosaCoronaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DiagnosaCoronaController implements the CRUD actions for DiagnosaCorona model.
 */
class DiagnosaCoronaController extends Controller
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
     * Lists all DiagnosaCorona models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DiagnosaCoronaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DiagnosaCorona model.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_icd Kode Icd
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_rkm_medis, $kode_icd)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_rkm_medis, $kode_icd),
        ]);
    }

    /**
     * Creates a new DiagnosaCorona model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DiagnosaCorona();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_icd' => $model->kode_icd]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DiagnosaCorona model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_icd Kode Icd
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_rkm_medis, $kode_icd)
    {
        $model = $this->findModel($no_rkm_medis, $kode_icd);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_rkm_medis' => $model->no_rkm_medis, 'kode_icd' => $model->kode_icd]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DiagnosaCorona model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_icd Kode Icd
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_rkm_medis, $kode_icd)
    {
        $this->findModel($no_rkm_medis, $kode_icd)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DiagnosaCorona model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_rkm_medis No Rkm Medis
     * @param string $kode_icd Kode Icd
     * @return DiagnosaCorona the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_rkm_medis, $kode_icd)
    {
        if (($model = DiagnosaCorona::findOne(['no_rkm_medis' => $no_rkm_medis, 'kode_icd' => $kode_icd])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
