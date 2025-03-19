<?php

namespace frontend\controllers;

use frontend\models\Dansos;
use frontend\models\DansosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DansosController implements the CRUD actions for Dansos model.
 */
class DansosController extends Controller
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
     * Lists all Dansos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DansosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dansos model.
     * @param float $dana Dana
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($dana)
    {
        return $this->render('view', [
            'model' => $this->findModel($dana),
        ]);
    }

    /**
     * Creates a new Dansos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dansos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'dana' => $model->dana]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dansos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param float $dana Dana
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($dana)
    {
        $model = $this->findModel($dana);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'dana' => $model->dana]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dansos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param float $dana Dana
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($dana)
    {
        $this->findModel($dana)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dansos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param float $dana Dana
     * @return Dansos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($dana)
    {
        if (($model = Dansos::findOne(['dana' => $dana])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
