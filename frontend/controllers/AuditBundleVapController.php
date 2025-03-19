<?php

namespace frontend\controllers;

use frontend\models\AuditBundleVap;
use frontend\models\AuditBundleVapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AuditBundleVapController implements the CRUD actions for AuditBundleVap model.
 */
class AuditBundleVapController extends Controller
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
     * Lists all AuditBundleVap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AuditBundleVapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuditBundleVap model.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tanggal, $id_ruang)
    {
        return $this->render('view', [
            'model' => $this->findModel($tanggal, $id_ruang),
        ]);
    }

    /**
     * Creates a new AuditBundleVap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AuditBundleVap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AuditBundleVap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tanggal, $id_ruang)
    {
        $model = $this->findModel($tanggal, $id_ruang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AuditBundleVap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tanggal, $id_ruang)
    {
        $this->findModel($tanggal, $id_ruang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuditBundleVap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $tanggal Tanggal
     * @param string $id_ruang Id Ruang
     * @return AuditBundleVap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tanggal, $id_ruang)
    {
        if (($model = AuditBundleVap::findOne(['tanggal' => $tanggal, 'id_ruang' => $id_ruang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
