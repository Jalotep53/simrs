<?php

namespace frontend\controllers;

use frontend\models\MapingPoliBpjs;
use frontend\models\MapingPoliBpjsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MapingPoliBpjsController implements the CRUD actions for MapingPoliBpjs model.
 */
class MapingPoliBpjsController extends Controller
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
     * Lists all MapingPoliBpjs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MapingPoliBpjsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MapingPoliBpjs model.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_poli_rs)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_poli_rs),
        ]);
    }

    /**
     * Creates a new MapingPoliBpjs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MapingPoliBpjs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_poli_rs' => $model->kd_poli_rs]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MapingPoliBpjs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_poli_rs)
    {
        $model = $this->findModel($kd_poli_rs);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_poli_rs' => $model->kd_poli_rs]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MapingPoliBpjs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_poli_rs)
    {
        $this->findModel($kd_poli_rs)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MapingPoliBpjs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_poli_rs Kd Poli Rs
     * @return MapingPoliBpjs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_poli_rs)
    {
        if (($model = MapingPoliBpjs::findOne(['kd_poli_rs' => $kd_poli_rs])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
