<?php

namespace frontend\controllers;

use frontend\models\JamJaga;
use frontend\modelsJamJagaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JamJagaController implements the CRUD actions for JamJaga model.
 */
class JamJagaController extends Controller
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
     * Lists all JamJaga models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new modelsJamJagaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JamJaga model.
     * @param int $no_id No ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_id),
        ]);
    }

    /**
     * Creates a new JamJaga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JamJaga();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_id' => $model->no_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JamJaga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $no_id No ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_id)
    {
        $model = $this->findModel($no_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_id' => $model->no_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JamJaga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $no_id No ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_id)
    {
        $this->findModel($no_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JamJaga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $no_id No ID
     * @return JamJaga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_id)
    {
        if (($model = JamJaga::findOne(['no_id' => $no_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
