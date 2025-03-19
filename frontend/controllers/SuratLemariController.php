<?php

namespace frontend\controllers;

use frontend\models\SuratLemari;
use frontend\models\SuratLemariSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratLemariController implements the CRUD actions for SuratLemari model.
 */
class SuratLemariController extends Controller
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
     * Lists all SuratLemari models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratLemariSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratLemari model.
     * @param string $kd Kd
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd),
        ]);
    }

    /**
     * Creates a new SuratLemari model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratLemari();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd' => $model->kd]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuratLemari model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd Kd
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd)
    {
        $model = $this->findModel($kd);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd' => $model->kd]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuratLemari model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd Kd
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd)
    {
        $this->findModel($kd)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuratLemari model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd Kd
     * @return SuratLemari the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd)
    {
        if (($model = SuratLemari::findOne(['kd' => $kd])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
