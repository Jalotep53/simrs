<?php

namespace frontend\controllers;

use frontend\models\RuangOk;
use frontend\models\RuangOkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RuangOkController implements the CRUD actions for RuangOk model.
 */
class RuangOkController extends Controller
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
     * Lists all RuangOk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RuangOkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RuangOk model.
     * @param string $kd_ruang_ok Kd Ruang Ok
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_ruang_ok)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_ruang_ok),
        ]);
    }

    /**
     * Creates a new RuangOk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RuangOk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_ruang_ok' => $model->kd_ruang_ok]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RuangOk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_ruang_ok Kd Ruang Ok
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_ruang_ok)
    {
        $model = $this->findModel($kd_ruang_ok);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_ruang_ok' => $model->kd_ruang_ok]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RuangOk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_ruang_ok Kd Ruang Ok
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_ruang_ok)
    {
        $this->findModel($kd_ruang_ok)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RuangOk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_ruang_ok Kd Ruang Ok
     * @return RuangOk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_ruang_ok)
    {
        if (($model = RuangOk::findOne(['kd_ruang_ok' => $kd_ruang_ok])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
