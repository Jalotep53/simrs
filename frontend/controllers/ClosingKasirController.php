<?php

namespace frontend\controllers;

use frontend\models\ClosingKasir;
use frontend\models\ClosingKasirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClosingKasirController implements the CRUD actions for ClosingKasir model.
 */
class ClosingKasirController extends Controller
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
     * Lists all ClosingKasir models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ClosingKasirSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ClosingKasir model.
     * @param string $shift Shift
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($shift)
    {
        return $this->render('view', [
            'model' => $this->findModel($shift),
        ]);
    }

    /**
     * Creates a new ClosingKasir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ClosingKasir();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'shift' => $model->shift]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ClosingKasir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $shift Shift
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($shift)
    {
        $model = $this->findModel($shift);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'shift' => $model->shift]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ClosingKasir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $shift Shift
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($shift)
    {
        $this->findModel($shift)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ClosingKasir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $shift Shift
     * @return ClosingKasir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($shift)
    {
        if (($model = ClosingKasir::findOne(['shift' => $shift])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
