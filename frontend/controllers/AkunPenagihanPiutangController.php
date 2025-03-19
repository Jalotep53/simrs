<?php

namespace frontend\controllers;

use frontend\models\AkunPenagihanPiutang;
use frontend\models\AkunPenagihanPiutangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AkunPenagihanPiutangController implements the CRUD actions for AkunPenagihanPiutang model.
 */
class AkunPenagihanPiutangController extends Controller
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
     * Lists all AkunPenagihanPiutang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AkunPenagihanPiutangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AkunPenagihanPiutang model.
     * @param string $kd_rek Kd Rek
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_rek)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_rek),
        ]);
    }

    /**
     * Creates a new AkunPenagihanPiutang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AkunPenagihanPiutang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_rek' => $model->kd_rek]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AkunPenagihanPiutang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_rek Kd Rek
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_rek)
    {
        $model = $this->findModel($kd_rek);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_rek' => $model->kd_rek]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AkunPenagihanPiutang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_rek Kd Rek
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_rek)
    {
        $this->findModel($kd_rek)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AkunPenagihanPiutang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_rek Kd Rek
     * @return AkunPenagihanPiutang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_rek)
    {
        if (($model = AkunPenagihanPiutang::findOne(['kd_rek' => $kd_rek])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
