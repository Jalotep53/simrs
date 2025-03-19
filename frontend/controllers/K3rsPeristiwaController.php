<?php

namespace frontend\controllers;

use frontend\models\K3rsPeristiwa;
use frontend\models\K3rsPeristiwaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * K3rsPeristiwaController implements the CRUD actions for K3rsPeristiwa model.
 */
class K3rsPeristiwaController extends Controller
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
     * Lists all K3rsPeristiwa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new K3rsPeristiwaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single K3rsPeristiwa model.
     * @param string $no_k3rs No K3rs
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_k3rs)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_k3rs),
        ]);
    }

    /**
     * Creates a new K3rsPeristiwa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new K3rsPeristiwa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_k3rs' => $model->no_k3rs]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing K3rsPeristiwa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_k3rs No K3rs
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_k3rs)
    {
        $model = $this->findModel($no_k3rs);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_k3rs' => $model->no_k3rs]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing K3rsPeristiwa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_k3rs No K3rs
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_k3rs)
    {
        $this->findModel($no_k3rs)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the K3rsPeristiwa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_k3rs No K3rs
     * @return K3rsPeristiwa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_k3rs)
    {
        if (($model = K3rsPeristiwa::findOne(['no_k3rs' => $no_k3rs])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
