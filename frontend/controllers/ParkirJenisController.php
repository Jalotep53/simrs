<?php

namespace frontend\controllers;

use frontend\models\ParkirJenis;
use frontend\models\ParkirJenisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ParkirJenisController implements the CRUD actions for ParkirJenis model.
 */
class ParkirJenisController extends Controller
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
     * Lists all ParkirJenis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ParkirJenisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ParkirJenis model.
     * @param string $kd_parkir Kd Parkir
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_parkir)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_parkir),
        ]);
    }

    /**
     * Creates a new ParkirJenis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ParkirJenis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_parkir' => $model->kd_parkir]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ParkirJenis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_parkir Kd Parkir
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_parkir)
    {
        $model = $this->findModel($kd_parkir);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_parkir' => $model->kd_parkir]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ParkirJenis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_parkir Kd Parkir
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_parkir)
    {
        $this->findModel($kd_parkir)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ParkirJenis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_parkir Kd Parkir
     * @return ParkirJenis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_parkir)
    {
        if (($model = ParkirJenis::findOne(['kd_parkir' => $kd_parkir])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
