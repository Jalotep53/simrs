<?php

namespace frontend\controllers;

use frontend\models\Setsms;
use frontend\models\SetsmsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetsmsController implements the CRUD actions for Setsms model.
 */
class SetsmsController extends Controller
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
     * Lists all Setsms models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetsmsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Setsms model.
     * @param string $kode_sms Kode Sms
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode_sms)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode_sms),
        ]);
    }

    /**
     * Creates a new Setsms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Setsms();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode_sms' => $model->kode_sms]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Setsms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kode_sms Kode Sms
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode_sms)
    {
        $model = $this->findModel($kode_sms);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode_sms' => $model->kode_sms]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Setsms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kode_sms Kode Sms
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode_sms)
    {
        $this->findModel($kode_sms)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Setsms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kode_sms Kode Sms
     * @return Setsms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode_sms)
    {
        if (($model = Setsms::findOne(['kode_sms' => $kode_sms])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
