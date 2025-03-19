<?php

namespace frontend\controllers;

use frontend\models\PemasukanLain;
use frontend\models\PemasukanLainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PemasukanLainController implements the CRUD actions for PemasukanLain model.
 */
class PemasukanLainController extends Controller
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
     * Lists all PemasukanLain models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PemasukanLainSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PemasukanLain model.
     * @param string $no_masuk No Masuk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_masuk)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_masuk),
        ]);
    }

    /**
     * Creates a new PemasukanLain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PemasukanLain();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_masuk' => $model->no_masuk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PemasukanLain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_masuk No Masuk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_masuk)
    {
        $model = $this->findModel($no_masuk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_masuk' => $model->no_masuk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PemasukanLain model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_masuk No Masuk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_masuk)
    {
        $this->findModel($no_masuk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PemasukanLain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_masuk No Masuk
     * @return PemasukanLain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_masuk)
    {
        if (($model = PemasukanLain::findOne(['no_masuk' => $no_masuk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
