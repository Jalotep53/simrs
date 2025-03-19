<?php

namespace frontend\controllers;

use frontend\models\ReferensiMobilejknBpjsBatal;
use frontend\models\ReferensiMobilejknBpjsBatalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReferensiMobilejknBpjsBatalController implements the CRUD actions for ReferensiMobilejknBpjsBatal model.
 */
class ReferensiMobilejknBpjsBatalController extends Controller
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
     * Lists all ReferensiMobilejknBpjsBatal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReferensiMobilejknBpjsBatalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReferensiMobilejknBpjsBatal model.
     * @param string $nobooking Nobooking
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nobooking)
    {
        return $this->render('view', [
            'model' => $this->findModel($nobooking),
        ]);
    }

    /**
     * Creates a new ReferensiMobilejknBpjsBatal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ReferensiMobilejknBpjsBatal();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nobooking' => $model->nobooking]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ReferensiMobilejknBpjsBatal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nobooking Nobooking
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nobooking)
    {
        $model = $this->findModel($nobooking);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nobooking' => $model->nobooking]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ReferensiMobilejknBpjsBatal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nobooking Nobooking
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nobooking)
    {
        $this->findModel($nobooking)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReferensiMobilejknBpjsBatal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nobooking Nobooking
     * @return ReferensiMobilejknBpjsBatal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nobooking)
    {
        if (($model = ReferensiMobilejknBpjsBatal::findOne(['nobooking' => $nobooking])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
