<?php

namespace frontend\controllers;

use frontend\models\SetPjlab;
use frontend\models\SetPjlabSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetPjlabController implements the CRUD actions for SetPjlab model.
 */
class SetPjlabController extends Controller
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
     * Lists all SetPjlab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetPjlabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetPjlab model.
     * @param string $kd_dokterlab Kd Dokterlab
     * @param string $kd_dokterrad Kd Dokterrad
     * @param string $kd_dokterhemodialisa Kd Dokterhemodialisa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_dokterlab, $kd_dokterrad, $kd_dokterhemodialisa)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_dokterlab, $kd_dokterrad, $kd_dokterhemodialisa),
        ]);
    }

    /**
     * Creates a new SetPjlab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetPjlab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_dokterlab' => $model->kd_dokterlab, 'kd_dokterrad' => $model->kd_dokterrad, 'kd_dokterhemodialisa' => $model->kd_dokterhemodialisa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetPjlab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_dokterlab Kd Dokterlab
     * @param string $kd_dokterrad Kd Dokterrad
     * @param string $kd_dokterhemodialisa Kd Dokterhemodialisa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_dokterlab, $kd_dokterrad, $kd_dokterhemodialisa)
    {
        $model = $this->findModel($kd_dokterlab, $kd_dokterrad, $kd_dokterhemodialisa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_dokterlab' => $model->kd_dokterlab, 'kd_dokterrad' => $model->kd_dokterrad, 'kd_dokterhemodialisa' => $model->kd_dokterhemodialisa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetPjlab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_dokterlab Kd Dokterlab
     * @param string $kd_dokterrad Kd Dokterrad
     * @param string $kd_dokterhemodialisa Kd Dokterhemodialisa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_dokterlab, $kd_dokterrad, $kd_dokterhemodialisa)
    {
        $this->findModel($kd_dokterlab, $kd_dokterrad, $kd_dokterhemodialisa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetPjlab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_dokterlab Kd Dokterlab
     * @param string $kd_dokterrad Kd Dokterrad
     * @param string $kd_dokterhemodialisa Kd Dokterhemodialisa
     * @return SetPjlab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_dokterlab, $kd_dokterrad, $kd_dokterhemodialisa)
    {
        if (($model = SetPjlab::findOne(['kd_dokterlab' => $kd_dokterlab, 'kd_dokterrad' => $kd_dokterrad, 'kd_dokterhemodialisa' => $kd_dokterhemodialisa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
