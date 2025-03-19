<?php

namespace frontend\controllers;

use frontend\models\BridgingSuratPriBpjs;
use frontend\models\BridgingSuratPriBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BridgingSuratPriBpjsController implements the CRUD actions for BridgingSuratPriBpjs model.
 */
class BridgingSuratPriBpjsController extends Controller
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
     * Lists all BridgingSuratPriBpjs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BridgingSuratPriBpjsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BridgingSuratPriBpjs model.
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
     * Creates a new BridgingSuratPriBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BridgingSuratPriBpjs();

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
     * Updates an existing BridgingSuratPriBpjs model.
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
     * Deletes an existing BridgingSuratPriBpjs model.
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
     * Finds the BridgingSuratPriBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_surat No Surat
     * @return BridgingSuratPriBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_surat)
    {
        if (($model = BridgingSuratPriBpjs::findOne(['no_surat' => $no_surat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
