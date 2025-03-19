<?php

namespace frontend\controllers;

use frontend\models\MetodeRacik;
use frontend\models\MetodeRacikSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MetodeRacikController implements the CRUD actions for MetodeRacik model.
 */
class MetodeRacikController extends Controller
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
     * Lists all MetodeRacik models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MetodeRacikSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MetodeRacik model.
     * @param string $kd_racik Kd Racik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_racik)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_racik),
        ]);
    }

    /**
     * Creates a new MetodeRacik model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MetodeRacik();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_racik' => $model->kd_racik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MetodeRacik model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_racik Kd Racik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_racik)
    {
        $model = $this->findModel($kd_racik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_racik' => $model->kd_racik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MetodeRacik model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_racik Kd Racik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_racik)
    {
        $this->findModel($kd_racik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MetodeRacik model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_racik Kd Racik
     * @return MetodeRacik the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_racik)
    {
        if (($model = MetodeRacik::findOne(['kd_racik' => $kd_racik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
