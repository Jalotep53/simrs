<?php

namespace frontend\controllers;

use frontend\models\Jamsostek;
use frontend\models\JamsostekSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JamsostekController implements the CRUD actions for Jamsostek model.
 */
class JamsostekController extends Controller
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
     * Lists all Jamsostek models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JamsostekSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jamsostek model.
     * @param string $stts Stts
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($stts)
    {
        return $this->render('view', [
            'model' => $this->findModel($stts),
        ]);
    }

    /**
     * Creates a new Jamsostek model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jamsostek();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'stts' => $model->stts]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jamsostek model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $stts Stts
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($stts)
    {
        $model = $this->findModel($stts);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stts' => $model->stts]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jamsostek model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $stts Stts
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($stts)
    {
        $this->findModel($stts)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jamsostek model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $stts Stts
     * @return Jamsostek the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stts)
    {
        if (($model = Jamsostek::findOne(['stts' => $stts])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
