<?php

namespace frontend\controllers;

use frontend\models\SetUrutNoRkmMedis;
use frontend\models\SetUrutNoRkmMedisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SetUrutNoRkmMedisController implements the CRUD actions for SetUrutNoRkmMedis model.
 */
class SetUrutNoRkmMedisController extends Controller
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
     * Lists all SetUrutNoRkmMedis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SetUrutNoRkmMedisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SetUrutNoRkmMedis model.
     * @param string $urutan Urutan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($urutan)
    {
        return $this->render('view', [
            'model' => $this->findModel($urutan),
        ]);
    }

    /**
     * Creates a new SetUrutNoRkmMedis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SetUrutNoRkmMedis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'urutan' => $model->urutan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SetUrutNoRkmMedis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $urutan Urutan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($urutan)
    {
        $model = $this->findModel($urutan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'urutan' => $model->urutan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SetUrutNoRkmMedis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $urutan Urutan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($urutan)
    {
        $this->findModel($urutan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SetUrutNoRkmMedis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $urutan Urutan
     * @return SetUrutNoRkmMedis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($urutan)
    {
        if (($model = SetUrutNoRkmMedis::findOne(['urutan' => $urutan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
