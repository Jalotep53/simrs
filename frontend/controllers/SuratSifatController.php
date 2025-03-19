<?php

namespace frontend\controllers;

use frontend\models\SuratSifat;
use frontend\models\SuratSifatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuratSifatController implements the CRUD actions for SuratSifat model.
 */
class SuratSifatController extends Controller
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
     * Lists all SuratSifat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuratSifatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuratSifat model.
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
     * Creates a new SuratSifat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuratSifat();

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
     * Updates an existing SuratSifat model.
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
     * Deletes an existing SuratSifat model.
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
     * Finds the SuratSifat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd Kd
     * @return SuratSifat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd)
    {
        if (($model = SuratSifat::findOne(['kd' => $kd])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
