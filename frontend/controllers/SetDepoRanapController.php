<?php

namespace frontend\controllers;

use frontend\models\SetDepoRanap;
use frontend\models\SetDepoRanapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetDepoRanapController implements the CRUD actions for SetDepoRanap model.
 */
class SetDepoRanapController extends Controller
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
     * Lists all SetDepoRanap models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetDepoRanapSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetDepoRanap model.
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kd_depo Kd Depo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_bangsal, $kd_depo)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_bangsal, $kd_depo),
        ]);
    }

    /**
     * Creates a new SetDepoRanap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetDepoRanap();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_bangsal' => $model->kd_bangsal, 'kd_depo' => $model->kd_depo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetDepoRanap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kd_depo Kd Depo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_bangsal, $kd_depo)
    {
        $model = $this->findModel($kd_bangsal, $kd_depo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_bangsal' => $model->kd_bangsal, 'kd_depo' => $model->kd_depo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetDepoRanap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kd_depo Kd Depo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_bangsal, $kd_depo)
    {
        $this->findModel($kd_bangsal, $kd_depo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetDepoRanap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_bangsal Kd Bangsal
     * @param string $kd_depo Kd Depo
     * @return SetDepoRanap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_bangsal, $kd_depo)
    {
        if (($model = SetDepoRanap::findOne(['kd_bangsal' => $kd_bangsal, 'kd_depo' => $kd_depo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
