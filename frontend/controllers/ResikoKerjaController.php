<?php

namespace frontend\controllers;

use frontend\models\ResikoKerja;
use frontend\models\ResikoKerjaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResikoKerjaController implements the CRUD actions for ResikoKerja model.
 */
class ResikoKerjaController extends Controller
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
     * Lists all ResikoKerja models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ResikoKerjaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResikoKerja model.
     * @param string $kode_resiko Kode Resiko
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_resiko)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_resiko),
        ]);
    }

    /**
     * Creates a new ResikoKerja model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ResikoKerja();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_resiko' => $model->kode_resiko]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ResikoKerja model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_resiko Kode Resiko
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_resiko)
    {
        $model = $this->findModel($kode_resiko);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_resiko' => $model->kode_resiko]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResikoKerja model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_resiko Kode Resiko
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_resiko)
    {
        $this->findModel($kode_resiko)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResikoKerja model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_resiko Kode Resiko
     * @return ResikoKerja the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_resiko)
    {
        if (($model = ResikoKerja::findOne(['kode_resiko' => $kode_resiko])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
