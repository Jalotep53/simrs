<?php

namespace frontend\controllers;

use frontend\models\Rekeningtahun;
use frontend\models\RekeningtahunSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RekeningtahunController implements the CRUD actions for Rekeningtahun model.
 */
class RekeningtahunController extends Controller
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
     * Lists all Rekeningtahun models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RekeningtahunSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rekeningtahun model.
     * @param string $thn Thn
     * @param string $kd_rek Kd Rek
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($thn, $kd_rek)
    {
        return $this->render('view', [
            'model' => $this->findModel($thn, $kd_rek),
        ]);
    }

    /**
     * Creates a new Rekeningtahun model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Rekeningtahun();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'thn' => $model->thn, 'kd_rek' => $model->kd_rek]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Rekeningtahun model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $thn Thn
     * @param string $kd_rek Kd Rek
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($thn, $kd_rek)
    {
        $model = $this->findModel($thn, $kd_rek);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'thn' => $model->thn, 'kd_rek' => $model->kd_rek]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Rekeningtahun model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $thn Thn
     * @param string $kd_rek Kd Rek
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($thn, $kd_rek)
    {
        $this->findModel($thn, $kd_rek)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rekeningtahun model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $thn Thn
     * @param string $kd_rek Kd Rek
     * @return Rekeningtahun the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($thn, $kd_rek)
    {
        if (($model = Rekeningtahun::findOne(['thn' => $thn, 'kd_rek' => $kd_rek])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
