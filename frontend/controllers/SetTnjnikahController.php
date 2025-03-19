<?php

namespace frontend\controllers;

use frontend\models\SetTnjnikah;
use frontend\models\SetTnjnikahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetTnjnikahController implements the CRUD actions for SetTnjnikah model.
 */
class SetTnjnikahController extends Controller
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
     * Lists all SetTnjnikah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetTnjnikahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetTnjnikah model.
     * @param float $tnj Tnj
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tnj)
    {
        return $this->render('view', [
            'model' => $this->findModel($tnj),
        ]);
    }

    /**
     * Creates a new SetTnjnikah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetTnjnikah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tnj' => $model->tnj]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetTnjnikah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param float $tnj Tnj
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tnj)
    {
        $model = $this->findModel($tnj);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tnj' => $model->tnj]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetTnjnikah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param float $tnj Tnj
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tnj)
    {
        $this->findModel($tnj)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetTnjnikah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param float $tnj Tnj
     * @return SetTnjnikah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tnj)
    {
        if (($model = SetTnjnikah::findOne(['tnj' => $tnj])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
