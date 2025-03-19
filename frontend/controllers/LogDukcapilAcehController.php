<?php

namespace frontend\controllers;

use frontend\models\LogDukcapilAceh;
use frontend\models\LogDukcapilAcehSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LogDukcapilAcehController implements the CRUD actions for LogDukcapilAceh model.
 */
class LogDukcapilAcehController extends Controller
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
     * Lists all LogDukcapilAceh models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LogDukcapilAcehSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LogDukcapilAceh model.
     * @param string $no_ktp No Ktp
     * @param string $tanggal Tanggal
     * @param string $user User
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_ktp, $tanggal, $user)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_ktp, $tanggal, $user),
        ]);
    }

    /**
     * Creates a new LogDukcapilAceh model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new LogDukcapilAceh();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_ktp' => $model->no_ktp, 'tanggal' => $model->tanggal, 'user' => $model->user]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LogDukcapilAceh model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_ktp No Ktp
     * @param string $tanggal Tanggal
     * @param string $user User
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_ktp, $tanggal, $user)
    {
        $model = $this->findModel($no_ktp, $tanggal, $user);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_ktp' => $model->no_ktp, 'tanggal' => $model->tanggal, 'user' => $model->user]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LogDukcapilAceh model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_ktp No Ktp
     * @param string $tanggal Tanggal
     * @param string $user User
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_ktp, $tanggal, $user)
    {
        $this->findModel($no_ktp, $tanggal, $user)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LogDukcapilAceh model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_ktp No Ktp
     * @param string $tanggal Tanggal
     * @param string $user User
     * @return LogDukcapilAceh the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_ktp, $tanggal, $user)
    {
        if (($model = LogDukcapilAceh::findOne(['no_ktp' => $no_ktp, 'tanggal' => $tanggal, 'user' => $user])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
